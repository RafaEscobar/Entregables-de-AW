@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Proyectos de AW</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="/imgs/ahorcado.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ahorcado</h5>
                  <p class="card-text">El juego del ahorcado es un juego en el que un jugador debe adivinar una palabra seleccionada por otro jugador. Si el jugador adivina correctamente la palabra antes de que se complete el dibujo del personaje ahorcado, gana el juego. Si se completa el dibujo antes de que se adivine la palabra, el jugador pierde.</p>
                </div>
                <a href="{{route('ahorcado')}}" class="btn btn-primary">Ver</a>
                <div class="d-flex justify-content-center">
                    <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/imgs/condicionales.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Condicionales a tres numeros</h5>
                  <p class="card-text">Este codigo permite identificar la jerarquia de mayor a menor de tres diferentes numeros ingresados por el usuario. Los valores numericos ingresados, se muestran en la consola ya ordenados</p>
                </div>
                <a href="{{route('condicionales')}}" class="btn btn-primary">Ver</a>
                <div class="d-flex justify-content-center">
                    <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/imgs/info.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Manejo de información con condicionales</h5>
                  <p class="card-text">Este codigo permite tratar diferente información y variables de distintos tipos en base a condicionales.</p>
                </div>
                <a href="{{route('info')}}" class="btn btn-primary">Ver</a>
                <div class="d-flex justify-content-center">
                    <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="/imgs/arreglos.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Arrays y Arrays bidimensionales</h5>
                    <p class="card-text">En este codigo se generaron dos arrays y dos arrays bidimensionales los cuales contienen información de tipo numerico y caracteres. Dichos arrays se imprimen con bucles for normales y for anidados.</p>
                  </div>
                  <a href="{{route('arreglos')}}" class="btn btn-primary">Ver</a>
                  <div class="d-flex justify-content-center">
                      <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/imgs/while.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Arrays con while</h5>
                      <p class="card-text">Se cuenta con un array con varios nombres de personas el cual se imprime a partir deun while.</p>
                    </div>
                    <a href="{{route('awhile')}}" class="btn btn-primary">Ver</a>
                    <div class="d-flex justify-content-center">
                        <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/imgs/patterns.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Patters</h5>
                      <p class="card-text">En JavaScript, los patrones (o patterns en inglés) son soluciones comunes y efectivas para problemas de programación recurrentes. Estos patrones pueden ser utilizados para mejorar la estructura, la legibilidad y la mantenibilidad del código.</p>
                    </div>
                    <a href="{{route('pat')}}" class="btn btn-primary">Ver</a>
                    <div class="d-flex justify-content-center">
                        <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/imgs/crud.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CRUD en JavaScript</h5>
                      <p class="card-text">Este código muestra el funcionamiento de un CRUD pero basado en JavaScript, con las funciones habituales, ver, editar y eliminar. Asi mismo se enlistan los registros generados debajo en forma de tabla.</p>
                    </div>
                    <a href="{{route('crud')}}" class="btn btn-primary">Ver</a>
                    <div class="d-flex justify-content-center">
                        <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="card">
                  <img src="/imgs/combo.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Combo dinamico</h5>
                    <p class="card-text">Este código nos permite generar un combo dinamico de estados. Esto consiste en un input select sobre estados, una vez seleccionado el estado en un segundo input select se nos desplegaran los municipios asociados.</p>
                  </div>
                  <a href="{{route('registro')}}" class="btn btn-primary">Ver</a>
                  <div class="d-flex justify-content-center">
                      <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                  </div>
              </div>
            </div> 
            <div class="col">
              <div class="card">
                  <img src="/imgs/buscar.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Crud con busqueda</h5>
                    <p class="card-text">Este código muestra un CRUD con una barra de busqueda con la cual es posible buscar de forma especifica un registro en base al nombre.</p>
                  </div>
                  <a href="{{route('buscar')}}" class="btn btn-primary">Ver</a>
                  <div class="d-flex justify-content-center">
                      <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                  </div>
              </div>
            </div> 
            <div class="col">
              <div class="card">
                  <img src="/imgs/regis.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Registro con tablas dinamicas</h5>
                    <p class="card-text">Este código permite crear un registro de usuario y generar su respectivo enlace a una tabla de estudios o labores.</p>
                  </div>
                  <a href="{{route('user.create')}}" class="btn btn-primary">Ver</a>
                  <div class="d-flex justify-content-center">
                      <a href="#" class=" my-2"><img src="https://cdn-icons-png.flaticon.com/512/270/270798.png" class="" alt="..." width="35" height="35"></a>
                  </div>
              </div>
            </div> 
        </div>
    </div>
@endsection