@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','registro de miembros')<!--seccion de titulo igual de la plantilla original -->
@section('contenido')<!-- seccion de contenido aqui tiene que ir dentro todo-->
    <div class=" nave">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('miembros')}}">MIEMBROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('registrocelulao')}}">CELULAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">BAUTIZADOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ESCUELA DE LIDERES</a>
        </li>
      </ul>
    </div>
    <div class="contenid">
        <div class="cajita">
          <div class="title ">
            <h5>RELLENAR DATOS DEL FORMULARIO</h5>
          </div>
          <div class="cajas">
            <table class="table table-sm table-bordered">
              <thead>
                  <th>N°</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>GENERO</th>
                  <th>FECHA DE NACIMIENTO</th>
                  <th>TELEFONO</th>
                  <th>DIRECCION</th>
                  <th>ESTADO</th>
                  <th>FECHA DE BAUTIZO</th>
              </thead>
              <tbody>
                @foreach ($miem as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nombre}}</td>
                  <td>{{$item->apellido_completo}}</td>
                  <td>{{$item->genero}}</td>
                  <td>{{$item->fecha_nacimiento}}</td>
                  <td>{{$item->telefono}}</td>
                  <td>{{$item->direccion}}</td>
                  <td>{{$item->estado}}</td>
                  <td>{{$item->id_bautizo}}</td>
                  <td>
                    <form action="" method="GET">
                        <button class="btn btn-outline-success">
                            <span class="fa-solid fa-list"></span>
                        </button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="GET">
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="">
                            <span class="fa-solid fa-square-pen"></span>
                        </button>
                    </form>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="botonagre"><!--va en la la parte de celula su estilo-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar</button>
          </div>
        </div>
    </div>
    <!--aqui viene la ventana emergente para rellenar datos-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('miembro.store') }}" method="POST">
              @csrf
              <label for="">Nombre</label>
              <input type="text" name="nombre" class="form-control" required>
              <label for="">Apellido</label>
              <input type="text" name="apellido_completo" class="form-control" required>
              <label for="">Genero</label>
              <input type="text" name="genero" class="form-control" required>
              <label for="">Fecha de Nacimiento</label>
              <input type="date" name="fecha_nacimiento" class="form-control" required>
              <label for="">Telefono</label>
              <input type="text" name="telefono" class="form-control" required>
              <label for="">Direccion</label>
              <input type="text" name="direccion" class="form-control" required>
              <label for="">Estado</label>
              <input type="text" name="estado" class="form-control" required>
              <label for="">Es Bautizado</label>
              <select id="opciones" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione una opcion</option>
                <option value="si">Si</option>
                <option value="no">No</option>
              </select>
              <input id="campoEntrada" type="date" style="display: none" name="fecha_de_bautizo" class="form-control">
              {{-- <label for="">Asiste a una celula</label>
              <select id="elegir" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione una opcion</option>
                <option value="si">Si</option>
                <option value="no">No</option>
              </select>
              <input id="campo" type="text" style="display: none" name="estado" class="form-control" required> --}}
              
            
          </div>   
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Guardar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <script>
        // Obtener elementos del DOM
        const selectOpciones = document.getElementById('opciones');
        const campoEntrada = document.getElementById('campoEntrada');
        // Agregar evento de cambio al select
        selectOpciones.addEventListener('change', mostrarCampoEntrada);
        function mostrarCampoEntrada() {
            const seleccionada = selectOpciones.options[selectOpciones.selectedIndex];
            if (seleccionada.value === 'si') {
                campoEntrada.style.display = 'block';
            } else {
                campoEntrada.style.display = 'none';
            }
        }
        // Obtener elementos del DOM
        const elegir = document.getElementById('elegir');
        const campo = document.getElementById('campo');
        // Agregar evento de cambio al select
        elegir.addEventListener('change', mostrarCampo);
        function mostrarCampo() {
            const seleccionada = elegir.options[elegir.selectedIndex];
            if (seleccionada.value === 'si') {
                  campo.style.display = 'block';
            } else {
                  campo.style.display = 'none';
            }
        }
    </script>
@endsection