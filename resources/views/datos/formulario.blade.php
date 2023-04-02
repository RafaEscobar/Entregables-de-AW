<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combo dinamico</title>
    <script src="{{asset('jquery-3.3.1.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script>
        $(document).ready(function(){
        $("#boxUni").hide();
        $("#boxGra").hide();
        $("#boxCarre").hide();
        $("#boxEmpre").hide();
        $("#boxDir").hide();
        $("#estudia").attr('required', '');
        $("#trabaja").attr('required', '');
           $("#estados").on('change', function(){
                var estados_id = $(this).find(":selected").val();
                console.log(estados_id); 
                if (estados_id==0) {
                    $("#municipio_id").html('<option value="0"> --- Seleccione antes un estado --- </option>');
                }else{
                    $("#municipio_id").load('ver_municipios?estados_id=' + estados_id);
                }
           });
           $('#estudia').on('change',function(){
              if (this.checked) {
               $("#boxUni").show();
               $("#boxGra").show();
               $("#boxCarre").show();
               $("#universidad").attr('required', '');
               $("#grado").attr('required', '');
               $("#carrera").attr('required', '');
               $("#trabaja").removeAttr('required', '');

               $("#boxTrabaja").hide();
              } else {
               $("#boxUni").hide();
               $("#boxGra").hide();
               $("#boxCarre").hide();
               $("#boxTrabaja").show();
               $("#universidad").removeAttr('required', '');
               $("#carrera").removeAttr('required', '');
               $("#grado").removeAttr('required', '');
              }  
            });
           $('#trabaja').on('change',function(){
              if (this.checked) {
                $("#boxEmpre").show();
               $("#boxDir").show();
               $("#boxEstudia").hide();
               $("#nomEmpresa").attr('required', '');
               $("#dir").attr('required', '');
               $("#estudia").removeAttr('required', '');

              } else {
                $("#boxEmpre").hide();
               $("#boxDir").hide();
               $("#boxEstudia").show();
               $("#nomEmpresa").removeAttr('required', '');
               $("#dir").removeAttr('required', '');
               
              }  
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Formulario</h1>

        <hr>

        <form action="{{route('user.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <div class="mb-3">
                <label for="app" class="form-label">Apellidos: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="app" name="app" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <div class="mb-3">
                <label for="matricula" class="form-label">Matricula: </label>
                <div class="input-group">
                  <input type="number" class="form-control" id="matricula" name="matricula" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <label for="gen" class="form-label">Genero: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gen" id="gen1" value="Masculino">
                <label class="form-check-label" for="gen1">
                  Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gen" id="gen2" value="Femenino">
                <label class="form-check-label" for="gen2">
                  Femenino
                </label>
            </div>
            <br>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <div  class="mb-3">
                <label for="basic-url" class="form-label">Selecciona un estado: </label>
                <select name="estados" id="estados" class="form-select" aria-label="Floating label select example">
                    <option value="0">--- Seleccione un estado ----</option>
                    @foreach($estados as $estado)
                        <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div  class="mb-3">
                <label for="basic-url" class="form-label">Selecciona un municipio: </label>
                <select name="municipio_id" id="municipio_id" class="form-select" aria-label="Floating label select example">
                    <option value="0">--- Seleccione un estado antes ----</option>
                </select>
            </div>
            <br>
            <hr>
            <div class="form-check form-switch" id="boxEstudia">
                <input type="checkbox" role="switch" class="form-check-input" id="estudia" name="estudia" aria-describedby="basic-addon3">
                <label for="estudia" class="form-check-label">¿Estudia?'</label>
            </div>
            <br>
            <div class="mb-3" id="boxUni">
                <label for="universidad" class="form-label">Universidad: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="universidad" name="universidad" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <div class="mb-3" id="boxGra">
                <label for="grado" class="form-label">Grado: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="grado" name="grado" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <div class="mb-3" id="boxCarre">
                <label for="carrera" class="form-label">Carrera: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="carrera" name="carrera" aria-describedby="basic-addon3" >
                </div>
            </div>
            <br>
            <hr>
            <div class="form-check form-switch" id="boxTrabaja">
                <input type="checkbox" role="switch" class="form-check-input" id="trabaja" name="trabaja" aria-describedby="basic-addon3" >
                <label for="trabaja" class="form-check-label">¿Trabaja?'</label>
            </div><br>
            <div class="mb-3" id="boxEmpre">
                <label for="nomEmpresa" class="form-label">Nombre de la empresa: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nomEmpresa" name="nomEmpresa" aria-describedby="basic-addon3" >
                </div>
            </div>
            <div class="mb-3" id="boxDir">
                <label for="dir" class="form-label">Dirección del trabajo: </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="dir" name="dir" aria-describedby="basic-addon3"  >
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4 ">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        <br>
    </div>
</body>
</html>