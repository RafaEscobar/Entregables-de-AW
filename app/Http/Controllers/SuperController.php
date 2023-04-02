<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function ahorcado(){
        return view('ahorcado');
    }
    public function condicionales(){
        return view('condicionales');
    }
    public function info(){
        return view('informacion');
    }
    public function arreglos(){
        return view('arreglos');
    }
    public function awhile(){
        return view('while');
    }
    public function pat(){
        return view('patterns');
    }
    public function crud(){
        return view('crud');
    }

}
