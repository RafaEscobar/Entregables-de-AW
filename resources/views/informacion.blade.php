@extends('layouts.plantilla')

@section('title', 'Información')
    
@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Información con condicionales</h1>
        <h2>DSM-54: Desarrollo de aplicaciones web I 4.0</h2>
        <br><hr>
        <h2>JavaScript</h2>
        <hr>
        <br>
        <p>Variable 1: <b id="mostrar1"></b> </p>
        <p>Variable 2: <b id="mostrar2"></b> </p>
        <p>Variable 3: <b class="mostrar2"></b> </p> <hr>
    
        <div id="info" class="info" name="info">Informacion de muestra</div>
    </div>
    <script text="text/javascript">
        // Variables
        var numero = 12;
        var texto = "Contenido de tipo texto";
        var boleanos = true;

        // Arreglos
        var uni1 = [1,2,3,4,5];
        var uni2 = ['a', 'b', 'c'];
        var bid1 = [[1,2,3], [1,2,3]];
        var bid2 = [['a', 'b', 'c'], ['a', 'b', 'c']];

        // Mostrar datos
        alert('TI TSU DSM-54');
        alert('VALOR: '+numero);
        console.log('TI TSU DSM-53');
        console.log('Valor ' + numero);

        document.getElementById('mostrar1').innerHTML = numero;

        // Sentencia de control
        var res=10;

        if(res>=18){
            console.log('Pepe es mayor de edad');
        }else{
            console.log('Pepe es menor de edad');
        }

        var opc1 = 2;
        var opc2 = 'Si';

        switch (opc1) {
            case 1:
                alert('Caso 1');
            break;
            case 2:
                switch (opc2) {
                    case 'Si':
                        alert('Caso 2: Si');
                    break;
                    case 'No':
                        alert('Caso 2: no');
                    break;
                    default:
                        alert('Caso 2: Error');
                    break;
                }
            break;
            default:
                alert('Caso en error!!');
            break;
        }

        document.getElementById('mostrar2').innerHTML = texto;
        document.getElementsByClassName('mostrar2')[0].innerHTML = boleanos;

        var dato = prompt('Coloque un dator', '');

        if(dato != ''){
            alert('El dato es: ' + dato);
            console.log('>>>>>>>> ' + dato);
        }else{
            alert('No has ingresado un dato');
        }
    </script>
@endsection