@extends('layouts.plantilla')

@section('title', 'Array con while')
    
@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Array con while</h1>
    </div>
    <script>
        var caracteres = ['Pedro', 'Emanuel', 'Joana', 'Luis', 'Jose', 'Maria', 'Melissa', 'Rocio', 'Mario', 'Juan'];
        var i = 0;
        while (i < caracteres.length) {
           console.log(caracteres[i]);
            i++;
        }
    </script>
@endsection