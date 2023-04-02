@extends('layouts.plantilla')

@section('title', 'Patterns')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Patterns</h1>
        <label for="letras">Letras</label><br />
        <input type="text" value="" onkeyup="this.value=NumText(this.value)" /><br />
        <script>
            function NumText(string) {
                var out = '';
            
                var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ';//Caracteres validos
            
                for (var i = 0; i < string.length; i++)
                    if (filtro.indexOf(string.charAt(i)) != -1)
                        out += string.charAt(i);
                return out;
            }
        </script>
        <br>
        <label for="numeros">Numeros</label><br />
        <input input type="text" value="" onkeyup="this.value=Numeros(this.value)" required /><br />
        <script>
            function Numeros(string) {
                var out = "";
                var filtro = "1234567890";
            
                for (var i = 0; i < string.length; i++)
                    if (filtro.indexOf(string.charAt(i)) != -1)
            
                        out += string.charAt(i);
                return out;
            }
        </script>
        <br>
        <label for="especial">Caracteres especiales</label><br>
        <input type="text" value="" onkeyup="this.value=CarText(this.value)" /><br />
        <script>
            function CarText(string) {
                var out = '';
            
                var filtro = 'e_.';//Caracteres validos
            
                for (var i = 0; i < string.length; i++)
                    if (filtro.indexOf(string.charAt(i)) != -1)
                        out += string.charAt(i);
                return out;
            }
        </script>
        <br>
        <input type="submit" value="Enviar" />
    </div>
@endsection