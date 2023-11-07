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
          <a class="nav-link" href="{{url('bautizados')}}">BAUTIZADOS</a>
        </li>
        <li>
          <a class="nav-link" href="{{url('encuentro')}}">ENCUENTRO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('escuela')}}">ESCUELA DE LIDERES</a>
        </li>
      </ul>
    </div>
    <div class="contenid">
        <div class="cajita">
          <div class="title ">
            <h5>LISTA DE LOS MIEMBROS </h5>
          </div>
          <div class="col-xl-11">
            <form action="{{route('mbuscar')}}" method="get">
              <div class="form-row">
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="texto" value="">
                </div>
                <div class="auto" class="col-auto">
                  <input type="submit" class="btn btn-primary" value="buscar">
                </div>
              </div>
            </form>
            <div class="boton" class="button">
              <form action="{{route('miembro.index')}}" method="GET">
                <input type="submit" class="btn btn-primary" value="volver">
              </form>
            </div>
        </div>
          <div class="cajas">
            <table class="table table-sm table-bordered">
              <thead>
                  <th>N°</th>
                  <th>NOMBRE</th>
                  <th>1ER APELLIDO</th>
                  <th>2DO APELLIDO</th>
                  <th>GENERO</th>
                  <th>FECHA DE NACIMIENTO</th>
                  <th>TELEFONO</th>
                  <th>ZONA</th>
                  <th>DIRECCION</th>
                  <th>NUMERO DE CELULA</th>
                  <th>CARGO</th>
                  <th>ESTADO</th>
                  <th>ACTUALIZAR</th>
              </thead>
              <tbody>
                @foreach ($miem as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nombre}}</td>
                  <td>{{$item->apellido_paterno}}</td>
                  <td>{{$item->apellido_materno}}</td>
                  <td>{{$item->genero}}</td>
                  <td>{{$item->fecha_nacimiento}}</td>
                  
                  <td>{{$item->telefono}}</td>
                  <td>{{$item->zona}}</td>
                  <td>{{$item->direccion}}</td>
                  <td>{{$item->id_celu}}</td>
                  <td>{{$item->cargo}}</td>
                  <td>{{$item->estado}}</td>

                  <td>
                    <form action="" method="GET">
                      <button type="button" class="btn btn-outline-dark btn-editar" data-miembro='@json($item)' data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="">
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
          <div class="pddf1">
            <form action="{{route('pdfmie')}}" method="GET">
              <input type="submit" class="btn btn-primary" value="Pdf">
            </form>
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
              <label for="">Apellido Paterno</label>
              <input type="text" name="apellido_paterno" class="form-control" required>
              <label for="">Apellido Materno</label>
              <input type="text" name="apellido_materno" class="form-control" required>
              <label for="">Genero</label>
              <input type="text" name="genero" class="form-control" required>
              <label for="">Fecha de Nacimiento</label>
              <input type="date" name="fecha_nacimiento" class="form-control" required>
              
              {{-- <select id="opciones" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione una opcion</option>
                <option value="si">Si</option>
                <option value="no">No</option>
              </select> --}}
              
              <label for="">Telefono</label>
              <input type="text" name="telefono" class="form-control" required>
              <label for="">Zona</label>
              <input type="text" name="zona" class="form-control" required>
              <label for="">Direccion</label>
              <input type="text" name="direccion" class="form-control" required>
              <label for="">Asiste a una celula</label>
              <select id="elegir" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione una opcion</option>
                <option value="si">Si</option>
                <option value="no">No</option>
              </select>
              <input id="campo" type="text" style="display: none" name="id_celu" class="form-control">
              <label for="">Cargo</label>
              <input type="text" name="cargo" class="form-control" required>
              <label for="">Estado</label>
              <input type="text" name="estado" class="form-control" required>
              
              
          </div>   
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Guardar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!--aqui viene el logo de la iglesia-->
    <div class="contenido1"><!--aqui vendra el logo de la iglesia-->
      <div class="cajalogo1">
        <a href="{{url('/inicio')}}">
          <img src="logo.png" width="250rem" >
        </a>
      </div>
    </div>
    <!--aqui para actulizar datos -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('miembros.update') }}" method="POST">
              @csrf
              @method("PUT")
              <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" required>
              <label for="">Nombre</label>
              <input type="text" name="nombre" id="input-nombre" class="form-control" required>
              <label for="">Apellido Paterno</label>
              <input type="text" name="apellido_paterno" id="input-apellido_paterno" class="form-control" required>
              <label for="">Apellido Materno</label>
              <input type="text" name="apellido_materno" id="input-apellido_materno" class="form-control" required>
              <label for="">Genero</label>
              <input type="text" name="genero" id="input-genero" class="form-control" required>
              <label for="">Fecha de Nacimiento</label>
              <input type="date" name="fecha_nacimiento" id="input-fecha_nacimiento" class="form-control" required>
              <label for="">Telefono</label>
              <input type="text" name="telefono" id="input-telefono" class="form-control" required>
              <label for="">Zona</label>
              <input type="text" name="zona" id="input-zona" class="form-control" required>
              <label for="">Direccion</label>
              <input type="text" name="direccion" id="input-direccion" class="form-control" required>
              <label for="">Numero de Celula</label>
              <input type="text"  name="id_celu" id="input-id_celu" class="form-control">
              <label for="">Cargo</label>
              <input type="text" name="cargo" id="input-cargo" class="form-control" required>
              <label for="">Estado</label>
              <input type="text" name="estado" id="input-estado" class="form-control" required>
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
        // const selectOpciones = document.getElementById('opciones');
        // const campoEntrada = document.getElementById('campoEntrada');
        // // Agregar evento de cambio al select
        // selectOpciones.addEventListener('change', mostrarCampoEntrada);
        // function mostrarCampoEntrada() {
        //     const seleccionada = selectOpciones.options[selectOpciones.selectedIndex];
        //     if (seleccionada.value === 'si') {
        //         campoEntrada.style.display = 'block';
        //     } else {
        //         campoEntrada.style.display = 'none';
        //     }
        // }
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
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
      $('.btn-editar').click(function(){
        let miembro = $(this).data('miembro');
        $('#id_usuario').val(miembro.id)
        $('#input-nombre').val(miembro.nombre)
        $('#input-apellido_paterno').val(miembro.apellido_paterno)
        $('#input-apellido_materno').val(miembro.apellido_materno)
        $('#input-genero').val(miembro.genero)
        $('#input-fecha_nacimiento').val(miembro.fecha_nacimiento)
        $('#input-telefono').val(miembro.telefono)
        $('#input-zona').val(miembro.zona)
        $('#input-direccion').val(miembro.direccion)
        $('#input-id_celu').val(miembro.id_celu)
        $('#input-cargo').val(miembro.cargo)
        $('#input-estado').val(miembro.estado)
        
        // $('#input-fecha_de_bautiso').val(miembro.fecha_de_bautizo)
      });
    });
    </script>
  
@endsection