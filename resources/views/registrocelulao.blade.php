@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','Registro de Celulas')<!--seccion de titulo igual de la plantilla original -->
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
        <div class="conteinercelu">
            <div class="cajacelu">
              <div class="titucelu ">
                <h5>REGISTRO DE LAS CELULAS</h5>
              </div>
              <div class="col-xl-10">
                  <form action="{{route('celula.index')}}" method="get">
                    <div class="form-row">
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="texto" value="">
                      </div>
                      <div class="col-auto">
                        <input type="submit" class="btn btn-primary" value="buscar">
                      </div>
                    </div>
                  </form>
                  <div class="button">
                    <form action="{{route('celula.index')}}" method="GET">
                      <input type="submit" class="btn btn-primary" value="volver">
                    </form>
                  </div>
              </div>
              <div class="cajascelu">
                <table class="table table-sm table-bordered">
                  <thead>
                      <th>N°</th>
                      <th>LIDER DE CELULA</th>
                      <th>ASISTENTE</th>
                      <th>Nº DE CELULA</th>
                      <th>DIRECCION</th>
                      <th>HORA</th>
                      <th>ESTADO</th>
                      <th>VISUALIZAR</th>
                      <th>ACTUALIZAR</th>
                  </thead>
                  <tbody>
                    @foreach ($dato as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->lider_celu}}</td>
                          <td>{{$item->asistente}}</td>
                          <td>{{$item->numero_celu}}</td>
                          <td>{{$item->direccion}}</td>
                          <td>{{$item->hora}}</td>
                          <td>{{$item->estado}}</td>
                          <td>
                            <a href="{{route('prueba.show',1)}}">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa-solid fa-list"></span>
                                </button>
                              </a>
                          </td>
                          <td>
                            <form action="" method="GET">
                                <button type="button" class="btn btn-outline-dark btn-editar" data-celula='@json($item)' data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="">
                                    <span class="fa-solid fa-square-pen"></span>
                                </button>
                            </form>
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
              </div>
              <div class="botonagre">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar</button>
              </div>
              <div class="pddf">
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
            <form action="{{ route('celula.store') }}" method="POST">
              @csrf
              <label for="">Lider de Celula</label>
              <input type="text" name="lider_celu" class="form-control" required>
              <label for="">Asistente</label>
              <input type="text" name="asistente" class="form-control" required>
              <label for="">N° de Celula</label>
              <input type="text" name="numero_celu" class="form-control" required>
              <label for="">Dirección</label>
              <input type="text" name="direccion" class="form-control" required>
              <label for="">Hora</label>
              <input type="text" name="hora" class="form-control" required> 
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
    <div class="contenido2"><!--aqui vendra el logo de la iglesia-->
      <div class="cajalogo2">
        <a href="{{url('/inicio')}}">
          <img src="logo.png" width="290rem" >
        </a>
      </div>
    </div>
    <!--aqui viene la ventana emergente para actualizar datos-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('celula.update') }}" method="POST">
              @csrf
              @method("PUT")
              <input type="hidden" name="id" id="input-id_celu" class="form-control" required value="">
              <label for="">Lider de Celula</label>
              <input type="text" name="lider_celu" id="input-lider_celu" class="form-control" required value="">
              <label for="">Asistente</label>
              <input type="text" name="asistente" id="input-asistente" class="form-control" required>
              <label for="">N° de Celula</label>
              <input type="text" name="numero_celu" id="input-numero_celu" class="form-control" required value="">
              <label for="">Dirección</label>
              <input type="text" name="direccion" id="input-direccion" class="form-control" required value="">
              <label for="">Hora</label>
              <input type="text" name="hora" id="input-hora" class="form-control" required value> 
              <label for="">Estado</label>
              <input type="text" name="estado" id="input-estado" class="form-control" required value=""> 
          </div>   
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Guardar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
@endsection

@section('javascript')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $('.btn-editar').click(function(){
        let celula = $(this).data('celula');
        $('#input-id_celu').val(celula.id)
        $('#input-lider_celu').val(celula.lider_celu)
        $('#input-asistente').val(celula.asistente)
        $('#input-numero_celu').val(celula.numero_celu)
        $('#input-direccion').val(celula.direccion)
        $('#input-hora').val(celula.hora)
        $('#input-estado').val(celula.estado)
      });
    });
  </script>
  
@endsection