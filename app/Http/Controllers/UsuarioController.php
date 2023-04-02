<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Estudio;
use App\Models\Labor;
use App\Models\Municipio;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(){
        $estados = Estado::all();
        //dump($estados);
        return view('datos.formulario', compact('estados'));
    }

    public function ver(Request $request){
        $estado_id = $request->get('estado_id');
        //dump($request);
        $municipios = Municipio::where('estado_id', $estado_id)->get();

        return view("datos/ver")->with(['municipios' => $municipios]);
    }

    public function ver_usuarios(Request $request){
        $coincidencia = $request->get('mensaje');

        // dump($coincidencia);
        $registros = User::where('name', 'LIKE', $coincidencia.'%')->get();
        if ($registros->isNotEmpty()) {
            return view('datos/ver_usuarios')->with(['registros' => $registros]);
        }else{
            return view('datos/sin_valores');
        }
    }
    public function ver_nuevo(){
        $registros = User::all();
        return view('datos/ver_nuevo')->with(['registros' => $registros]);
        
    }

    public function store(Request $request){
        $casillas = $request->all();
        $user = User::create($request->all());

        // Si contiene lo que debe de contener
        // dump($user['id']);
        $men1 = 'Tiene algo';
        $men2 = 'No tiene nada';
        if(isset($casillas['trabaja'])){
            // CUANDO SE ENVIA ALGO
            // dump($men1);
            //? PARA TRABAJO
            $trabaja = new Labor();

            
            $trabaja->nomEmpresa = $request->nomEmpresa;
            $trabaja->dir = $request->dir;
            $trabaja->usuario_id = $user['id'];

            $trabaja->save();
            
        }else{

        }
        if(isset($casillas['estudia'])){
            //? PARA ESTUDIOS
            $estudio = new Estudio();
    
            $estudio->universidad = $request->universidad;
            $estudio->grado = $request->grado;
            $estudio->carrera = $request->carrera;
            $estudio->usuario_id = $user['id'];
    
            $estudio->save();
        }else{

        }
        return view('welcome');
    }

    public function buscar(){
        $registros = User::all();
        // dump($registros);

        return view('datos.buscar', compact('registros'));
    }
}
