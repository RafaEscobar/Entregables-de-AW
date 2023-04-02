@extends('layouts.plantilla')

@section('title', 'Condicionales')
    
@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Condicionales</h1>
        <p id="a"></p>
        <p id="b"></p>
        <p id="c"></p> 
    </div>
    <script>
        let a,b,c;
        alert("Ingresa 3 numeros");
        a = prompt('Ingresa el valor de a: ');
        b = prompt('Ingresa el valor de b: ');
        c = prompt('Ingresa el valor de c: ');

        if (a==b && a==c ){
            console.log("(A=B=C)" );
            console.log( "(" + a + "=" + b + "=" + c + ")" );
        }

        else if(a>b && b>c){
            console.log("(A>B>C)" );
            console.log( "(" + a + ">" + b + ">" + c + ")" );
        }else if(a>c && c>b){
            console.log("(A>C>B)" );
            console.log( "(" + a + ">" + c + ">" + b + ")" );
        }else if(b>a && a>c){
            console.log("(B>A>C)" );
            console.log( "(" + b + ">" + a + ">" + c + ")" );
        }else if(b>c && c>a){
            console.log("(B>C>A)" );
            console.log( "(" + b + ">" + c + ">" + a + ")" );
        }else if(c>a && a>b){
            console.log("(C>A>B)" );
            console.log( "(" + c + ">" + a + ">" + b + ")" );
        }else if(c>b && b>a){
            console.log("(C>B>A)" );
            console.log( "(" + c + ">" + b + ">" + a + ")" );
        }else if(a>b && b==c){
            console.log("(A>B=C)" );
            console.log( "(" + a + ">" + b + "=" + c + ")" );
        }else if(b>a && a==c){
            console.log("(B>A=C)" );
            console.log( "(" + b + ">" + a + "=" + c + ")" );
        }else if(c>a && a==b){
            console.log("(C>A=B)" );
            console.log( "(" + c + ">" + a + "=" + b + ")" );
        }else if(a==b && b>c){
            console.log("(A=B>C)" );
            console.log( "(" + a + "=" + b + ">" + c + ")" );
        }else if(b==c && c>a){
            console.log("(B=C>A)" );
            console.log( "(" + b + "=" + c + ">" + a + ")" );
        }else if(a==c && c>b){
            console.log("(A=C>B)" );
            console.log( "(" + a + "=" + c + ">" + b + ")" );
        }

        document.getElementById('a').innerHTML = ('A: ') + a;
        document.getElementById('b').innerHTML = ('B: ') + b;
        document.getElementById('c').innerHTML = ('C: ') + c;
    </script>
@endsection