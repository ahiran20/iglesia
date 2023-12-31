@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','Registro de Bautizo')<!--seccion de titulo igual de la plantilla original -->
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
        <div class="contenidobau">
            <div class="cajitabau">
              <div class="titlebau ">
                <h5>PERSONAS BAUTIZADAS</h5>
              </div>
              <div class="cajabau">
                <table class="table table-sm table-bordered">
                  <thead>
                      <th>N°</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO PATERNO</th>
                      <th>APELLIDO MATERNO</th>
                      <th>GENERO</th>
                      <th>CI</th>
                      <th>POR QUIEN FUE BAUTIZADO</th>
                      <th>TESTIGO</th>
                      <th>FECHA DE BAUTIZO</th>
                  </thead>
                  <tbody>
                    @foreach ($bautizo as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->miembros->nombre}}</td>
                          <td>{{$item->miembros->apellido_paterno}}</td>
                          <td>{{$item->miembros->apellido_materno}}</td>
                          <td>{{$item->miembros->genero}}</td>
                          <td>{{$item->ci}}</td>
                          <td>{{$item->encargado_del_bautizo}}</td>
                          <td>{{$item->testigo}}</td>
                          <td>{{$item->fecha_de_bautizo}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="botonagre"><!--va en la la parte de celula su estilo-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar</button>
              </div>
              <div class="pddf2">
                <form action="{{route('pdfcelu')}}" method="GET">
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
            <form action="{{ route('bautizo.store') }}" method="POST">
              @csrf
              <label for="">N° Identificativo del Miembro</label>
              <input type="text" name="id_miembro" class="form-control" required>
              <label for="">Carnet de Identidad</label>
              <input type="text" name="ci" class="form-control" required>
              <label for="">Encargado de bautizarlo</label>
              <input type="text" name="encargado_del_bautizo" class="form-control" required>
              <label for="">Testigo del Bautizo</label>
              <input type="text" name="testigo" class="form-control" required>
              <label for="">Fecha de Bautizo</label>
              <input type="date" name="fecha de bautizo" class="form-control" required>
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
     <div class="contenido3"><!--aqui vendra el logo de la iglesia-->
      <div class="cajalogo3">
        <a href="{{url('/inicio')}}">
          <img src="logo.png" width="290rem" >
        </a>
      </div>
    </div>
@endsection