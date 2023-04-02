@extends('layouts.plantilla')

@section('title', 'Ahorcado')
    
@section('content')

    <div class="container my-4">
        <h1 class="mb-4">Juego de ahorcado</h1>
        <div id="imagen"></div>
        <p>Ingresa letra</p>
        <input type="text" name="" id="letra" maxlength="1" required> 
        <button id="comprobar">Comprobar</button>
        <p id="ver"></p>
    </div>
    <script>
        String.prototype.replaceAt=function(index, character) { return this.substring(0, index) + character + this.substring(index+character.length); } 
        //Palabras
        const palabras=['carro','telefono','mesa','puerta','zapatos','vaso','colores'];
        //Elegir palara al azar
        const pal=palabras[Math.floor(Math.random()*palabras.length)];
        //Cambiar palabra por guiones
        let ocultarPalabra = pal.replace(/./g,"_ ");
        let contador=0;
        let cont=0;
        let actImg, puerta=false;
        //entrada de letra
        document.querySelector('#comprobar').addEventListener('click', ()=>{
            actImg=true
            const letra = document.querySelector('#letra').value;
            
            //validar letra
            for(const i in pal){
                if(letra==pal[i]){
                    ocultarPalabra=ocultarPalabra.replaceAt(i*2,letra);
                    actImg=false;
                }
            }
            if(actImg && puerta){
                contador++;
                document.querySelector('#imagen').style.backgroundPosition= -(180*contador)+'px 0';
                if(contador==6){
                    alert('El juego termino')
                }
            }
            if(ocultarPalabra.includes('_')==false){
                alert('FELICIDADES GANASTE!!!!');
            }
            document.querySelector('#ver').innerHTML = ocultarPalabra;
            document.querySelector('#letra').value='';
            puerta=true;
        });
    </script>
@endsection