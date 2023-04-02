@extends('layouts.plantilla')

@section('title', 'CRUD')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">CRUD en JavaScript</h1>
        <form action="#" id="formulario">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input type="text" id="nombre" placeholder="Ingresa un nombre" class="form-control">
            </div>
            <div class="mb-3">
              <label for="matricula" class="form-label">Matricula: </label>
              <input type="text" id="matricula" placeholder="Ingresa la matricula" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fechaN" class="form-label">Fecha de nacimiento:</label>
              <input type="date" id="fechaN" class="form-control">
            </div>
            <div class="mb-3">
              <label for="genero" class="form-label">Genero: </label>
              <input type="text" id="genero" placeholder="Ingresa el genero" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary"  id="btnAgregar">Guardar</button>
        </form>
        <div class="div-listado">
            <h2>Listado Empleados</h2>
            <div class="div-registros">
                
            </div>
        </div>
    </div>
    <script>
        // Array listado
        let listado = [];
        // Control de manejo para diferenciar edicion
        let control1 = false;
        // id
        let id_i=0;
            
        // Objeto usuario
        const usuario = {
            id: '',
            nombre: '',
            matricula: '',
            fechaN: '',
            genero: '',
        }
        
        // Constantes para cada campo y el formulario
        const formulario = document.querySelector('#formulario');
        const nombreInput = document.querySelector('#nombre');
        const matriculaInput = document.querySelector('#matricula');
        const fechaNInput = document.querySelector('#fechaN');
        const generoInput = document.querySelector('#genero');
        const btnAgregarInput = document.querySelector('#btnAgregar');
        
        // Evento submit para funcion -validarFormulario-
        formulario.addEventListener('submit', validarFormulario);
        
        // Funcion para validad campos
        function validarFormulario(e) {
            // Cancelamos el evento por defecto
            e.preventDefault();
            
            // Validamos campos con valores
            if(nombreInput.value === '' || matriculaInput.value === '' || fechaNInput.value === '' || generoInput.value === '') {
                alert('Por favor ingresa valores en todos los campos');
                return;
            }
        
            // Si control1 es -true- acceder aqui
            if(control1) {
                // Llammamos al editar
                editUsuario();
                // Control reseteado a -false-
                control1 = false;
            } else {
                // Autoincrement del ID
                usuario.id = ++id_i;
                // Igualar contenido de inputs a las propiedades del Objeto User
                usuario.nombre = nombreInput.value;
                usuario.matricula = matriculaInput.value;
                usuario.fechaN = fechaNInput.value;
                usuario.genero = generoInput.value;
            
                // Llamamos a la funcion addUsuario para agregar el registro ya cargando los valores en las propiedades
                addUsuario();
            }
        }
        
        // Funcion para agregar registro
        function addUsuario() {
            // Ingresamos con el metodo push el registro al array
            listado.push({...usuario});
            // Mostramos el usuario en el listado
            showUsuario();
            // Reseteamos el formulario
            formulario.reset();
        
            // Funcion para limpia propiedades del Objeto
            clearObject();
        }
        
        // Funcion para limpiar Objeto
        function clearObject() {
            usuario.id = '';
            usuario.nombre = '';
            usuario.matricula = '';
            usuario.fechaN = '';
            usuario.genero = '';
        }
        
        // Funcion para mostrar el usuario
        function showUsuario() {
            // Llamamos a la funcion que limpia los inputs 
            clearHTML();
            // Almacenamos una referencia al contenedor del listado
            const contentList = document.querySelector('.div-registros');
            // Iteramos las propiedades del objeto en un parrafo html
            listado.forEach(user => {
                // Deseestructuramos las propiedades del objeto user
                const {id, nombre, matricula, fechaN, genero } = user;
                // Creamos el parrafo html, e insertamos el contenido de las propiedades del objeto en dicho parrafo
                const parrafo = document.createElement('p');
                parrafo.textContent = `${id} - ${nombre} - ${matricula} - ${fechaN} - ${genero}`;
                parrafo.dataset.id = id;
                
                // Generamos los btns para editar y eliminar colocandolos al final segun la secuencia de propiedades
                const btnEdit = document.createElement('button');
                btnEdit.onclick = () => cargarUsuario(user);
                btnEdit.textContent = 'Editar';
                btnEdit.classList.add('btn', 'btn-editar');
                parrafo.append(btnEdit);
            
                const btnDelete = document.createElement('button');
                btnDelete.onclick = () => deleteUsuario(id);
                btnDelete.textContent = 'Eliminar';
                btnDelete.classList.add('btn', 'btn-eliminar');
                parrafo.append(btnDelete);
            
                // Generamos un espaciado con <hr>
                const espaciado = document.createElement('hr');
            
                // Agregamos el parrafo y el espaciado en el div del listado, referido en la variable contentList
                contentList.appendChild(parrafo);
                contentList.appendChild(espaciado);
            });
        }
        
        // Funcion para cargar el registro
        function cargarUsuario(user) {
            // Desestructuramos las propiedades del objeto
            const {id, nombre, matricula, fechaN, genero} = user;
        
            // Agregamos los valores de inputs a las propiedades
            nombreInput.value = nombre;
            matriculaInput.value = matricula;
            fechaNInput.value = fechaN;
            generoInput.value = genero;
            usuario.id = id;
        
            // Generamos el btn actualizar para generar el update
            formulario.querySelector('button[type="submit"]').textContent = 'Actualizar';
            // Abrimos el diferenciador para el edit
            control1 = true;
        }
        
        // Funcion para actualizar
        function editUsuario() {
            // Agregamos los valores de inputs a las propiedades
            usuario.nombre = nombreInput.value;
            usuario.matricula = matriculaInput.value;
            usuario.fechaN = fechaNInput.value;
            usuario.genero = generoInput.value;
            // Mapeamos los valores rescatados para el Id seleccionado
            listado.map(user => {
                if(user.id === usuario.id) {
                    user.id = usuario.id;
                    user.nombre = usuario.nombre;
                    user.matricula = usuario.matricula;
                    user.fechaN = usuario.fechaN;
                    user.genero = usuario.genero;
                }
            });
        
            // Llamamos a la funcion para limpiar para el listado
            clearHTML();
            // Mostramos el usuario
            showUsuario();
            // Reseteamos formulario
            formulario.reset();
            // Agregamos btn de "agregar"
            formulario.querySelector('button[type="submit"]').textContent = 'Agregar';
            // Reestablecemos control de diferenciador de update
            control1 = false;
        }
        
        // Funcion para borrar registro
        function deleteUsuario(id) {
            // Regeneramos el array con todos los registros excepto el seleccionado
            listado = listado.filter(user => user.id !== id);
            // Llamamos a la funcion para limpiar para el listado
            clearHTML();
            showUsuario();
        }
        
        // Funcion para limpiar formulario
        function clearHTML() {
            const contentList = document.querySelector('.div-registros');
            while(contentList.firstChild) {
                contentList.removeChild(contentList.firstChild);
            }
        }
    </script>
@endsection