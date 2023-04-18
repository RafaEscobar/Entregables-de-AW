<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar</title>
    <script src="{{asset('jquery-3.3.1.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
      <div class="container my-4">
        <h1 class="mb-4">Buscar registro</h1>
          <div class="input-group mb-3 mt-4">
            <span class="input-group-text" id="inputGroup-sizing-default">Busca por nombre:</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="ingreso" name="ingreso">
          </div>
          <br>
          <table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Matricula</th>
                  <th scope="col">Genero</th>
                  <th scope="col">Municipio</th>
                </tr>
              </thead>
              <tbody id="loadsite">
                @foreach ($registros as $item)                   
                @if (isset($item['name']))
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->matricula}}</td>
                    <td>{{$item->gen}}</td>
                    <td>{{$item->municipio->nombre}}</td>
                  </tr>
                @endif
                @endforeach
              </tbody>
          </table>
      </div>
    </body>
    <script>
        $(document).ready(function(){
            $('#ingreso').on('keyup', function(){
                let mensaje = document.getElementById("ingreso").value;
                if(mensaje.length>=3){
                  $('#loadsite').load('ver_usuarios?mensaje=' + mensaje);
                }
            });
            const input = document.getElementById('ingreso');
            input.addEventListener('input', () => {
              if (input.value.trim().length === 0 || input.value.trim().length === 1 || input.value.trim().length === 2) {
                console.log('El input está vacío');
                $('#loadsite').load('ver_nuevo');
              }
            });
        });
    </script>
</html>