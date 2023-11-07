@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','registro de Encuentro')<!--seccion de titulo igual de la plantilla original -->
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
            <div class="conteiner_encu">
                <div class="cajaencu">
                  <div class="tituencu ">
                    <h5>PERSONAS QUE FUERON AL ENCUENTRO</h5>
                  </div>
                  <div class="bbt">
                    <div class="col-xl-10">
                        <form action="" method="get">
                          <div class="form-row">
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="texto" value="">
                            </div>
                            <div class="col-auto">
                              <input type="submit" class="btn btn-primary" value="buscar">
                            </div>
                          </div>
                        </form>
                        <div class="button">
                          <form action="" method="GET">
                            <input type="submit" class="btn btn-primary" value="volver">
                          </form>
                        </div>
                    </div>
                  </div>
                  <div class="cajasencu">
                    <table class="table table-sm table-bordered">
                      <thead>
                          <th colspan="6"></th>
                          <th colspan="4">PRE ENCUENTRO</th>
                          <th>ENCUENTRO</th>
                          <th colspan="4">POST ENCUENTRO</th>
                      </thead>
                      <THead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>1ER APELLIDO</th>
                            <th>2DO APELLIDO</th>
                            <th>GENERO</th>
                            <th>1ra</th>
                            <th>2da</th>
                            <th>3ra</th>
                            <th>4ta</th>
                            <th>fecha de encuentro</th>
                            <th>1da</th>
                            <th>2da</th>
                            <th>3ra</th>
                            <th>4ta</th>
                        </tr>
                      </THead>
                      <tbody>
                        @foreach ($eencu as $item)
                        <tr>
                          <td>
                            <form action="" method="GET">
                                <button type="button" class="btn btn-outline-dark btn-editar"data-encuu='@json($item)'  data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="">
                                    <span class="fa-solid fa-square-pen"></span>
                                </button>
                            </form>
                          </td>
                          <td>{{$item->id}}</td>
                          <td>{{$item->nombre}}</td>
                          <td>{{$item->apellido_paterno}}</td>
                          <td>{{$item->apellido_materno}}</td>
                          <td>{{$item->genero}}</td>
                          <td>{{$item->preencuentrouno}}</td>
                          <td>{{$item->preencuentrodos}}</td>
                          <td>{{$item->preencuentrotres}}</td>
                          <td>{{$item->preencuentrocuatro}}</td>
                          <td>{{$item->fecha_de_encuento}}</td>
                          <td>{{$item->postencuentrouno}}</td>
                          <td>{{$item->postencuentrodos}}</td>
                          <td>{{$item->postencuentrotres}}</td>
                          <td>{{$item->postencuentrocuatro}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br>
                  </div>
                  <div class="botonencu">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar</button>
                  </div>
                  <div class="pddf3">
                    <form action="{{route('pdfcelu')}}" method="GET">
                      <input type="submit" class="btn btn-primary" value="Pdf">
                    </form>
                  </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('encu.store') }}" method="POST">
                        @csrf
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="apellido_paterno" class="form-control" required>
                        <label for="">Apellido Materno</label>
                        <input type="text" name="apellido_materno" class="form-control" required value="">
                        <label for="">Genero</label>
                        <input type="text" name="genero" class="form-control" required value="">
                        <label for="">PRE ENCUENTRO</label>
                        <br>
                        <label for="">1ra Clase</label>
                        <input type="text" name="preencuentrouno" class="form-control" value="">
                        <label for="">2da Clase</label>
                        <input type="text" name="preencuentrodos" class="form-control" value=""> 
                        <label for="">3ra Clase</label>
                        <input type="text" name="preencuentrotres" class="form-control" value=""> 
                        <label for="">4ta Clase</label>
                        <input type="text" name="preencuentrocuatro" class="form-control" value=""> 
                        <label for="">Fecha de Encuentro</label>
                        <input type="date" name="fecha_de_encuento" class="form-control" value=""> 
                        <label for="">POST ENCUENTRO</label>
                        <br>
                        <label for="">1ra Clase</label>
                        <input type="text" name="postencuentrouno" class="form-control" value=""> 
                        <label for="">2da Clase</label>
                        <input type="text" name="postencuentrodos" class="form-control" value=""> 
                        <label for="">3ra Clase</label>
                        <input type="text" name="postencuentrotres" class="form-control" value=""> 
                        <label for="">4ta Clase</label>
                        <input type="text" name="postencuentrocuatro" class="form-control" value="">              
                    </div>   
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                  </div>
                </div>
            </div>
            <!--aqui viene la ventana emergente para actualizar datos-->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('encu.update') }}" method="POST">
                             @csrf
                             @method("PUT")
                             <input type="hidden" name="id" id="input-id" class="form-control" required>
                             <label for="">Nombre</label>
                             <input type="text" name="nombre" id="input-nombre" class="form-control" required>
                             <label for="">Apellido Paterno</label>
                             <input type="text" name="apellido_paterno" id="input-apellido_paterno" class="form-control" required>
                             <label for="">Apellido Materno</label>
                             <input type="text" name="apellido_materno" id="input-apellido_materno" class="form-control" required value="">
                             <label for="">Genero</label>
                             <input type="text" name="genero" id="input-genero" class="form-control" required value="">
                             <label for="">PRE ENCUENTRO</label>
                             <br>
                             <label for="">1ra Clase</label>
                             <input type="text" name="preencuentrouno" id="input-preencuentrouno" class="form-control" value="">
                             <label for="">2da Clase</label>
                             <input type="text" name="preencuentrodos" id="input-preencuentrodos" class="form-control" value=""> 
                             <label for="">3ra Clase</label>
                             <input type="text" name="preencuentrotres" id="input-preencuentrotres" class="form-control" value=""> 
                             <label for="">4ta Clase</label>
                             <input type="text" name="preencuentrocuatro" id="input-preencuentrocuatro" class="form-control" value=""> 
                             <label for="">Fecha de Encuentro</label>
                             <input type="date" name="fecha_de_encuento" id="input-fecha_de_encuento" class="form-control" value=""> 
                             <label for="">POST ENCUENTRO</label>
                             <br>
                             <label for="">1ra Clase</label>
                             <input type="text" name="postencuentrouno" id="input-postencuentrouno" class="form-control" value=""> 
                             <label for="">2da Clase</label>
                             <input type="text" name="postencuentrodos" id="input-postencuentrodos" class="form-control" value=""> 
                             <label for="">3ra Clase</label>
                             <input type="text" name="postencuentrotres" id="input-postencuentrotres" class="form-control" value=""> 
                             <label for="">4ta Clase</label>
                             <input type="text" name="postencuentrocuatro" id="input-postencuentrocuatro" class="form-control" value="">
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
            <div class="contenido4"><!--aqui vendra el logo de la iglesia-->
              <div class="cajalogo4">
                <a href="{{url('/inicio')}}">
                  <img src="logo.png" width="290rem" >
                </a>
              </div>
            </div>
@endsection
@section('javascript')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $('.btn-editar').click(function(){
        let encuu = $(this).data('encuu');
        $('#input-id').val(encuu.id)
        $('#input-nombre').val(encuu.nombre)
        $('#input-apellido_paterno').val(encuu.apellido_paterno)
        $('#input-apellido_materno').val(encuu.apellido_materno)
        $('#input-genero').val(encuu.genero)
        $('#input-preencuentrouno').val(encuu.preencuentrouno)
        $('#input-preencuentrodos').val(encuu.preencuentrodos)
        $('#input-preencuentrotres').val(encuu.preencuentrotres)
        $('#input-preencuentrocuatro').val(encuu.preencuentrocuatro)
        $('#input-fecha_de_encuento').val(encuu.fecha_de_encuento)
        $('#input-postencuentrouno').val(encuu.postencuentrouno)
        $('#input-postencuentrodos').val(encuu.postencuentrodos)
        $('#input-postencuentrotres').val(encuu.postencuentrotres)
        $('#input-postencuentrocuatro').val(encuu.postencuentrocuatro)
      });
    });
  </script>
@endsection