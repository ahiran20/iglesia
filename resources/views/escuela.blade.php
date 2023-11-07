@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','registro de Escuela de Lideres')<!--seccion de titulo igual de la plantilla original -->
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
            <div class="conteiner_escu">
                <div class="cajaescu">
                  <div class="tituescu ">
                    <h5>ESCUELA DE LIDERES</h5>
                  </div>
                  <div class="col-xl-10">
                      <form action="" method="get">
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
                        <form action="" method="GET">
                          <input type="submit" class="btn btn-primary" value="volver">
                        </form>
                      </div>
                  </div>
                  <div class="cajasescu">
                    <table class="table table-sm table-bordered">
                      <thead>
                          <th colspan="5"></th>
                          <th colspan="4">MODULO 1</th>
                          <th colspan="4">MODULO 2</th>
                          <th colspan="4">MODULO 3</th>
                      </thead>
                      <THead>
                        <tr>
                            <th></th>
                            <th>N° Identificativo de Encuentrista</th>
                            <th>1er Apellido</th>
                            <th>2do Apellido</th>
                            <th>Genero</th>
                            <th>1ra</th>
                            <th>2da</th>
                            <th>3ra</th>
                            <th>4ta</th>
                            <th>1ra</th>
                            <th>2da</th>
                            <th>3ra</th>
                            <th>4ta</th>
                            <th>1ra</th>
                            <th>2da</th>
                            <th>3ra</th>
                            <th>4ta</th>
                        </tr>
                      </THead>
                      <tbody>
                        @foreach ($escue as $item)
                        <tr>
                            <td>
                                <form action="" method="GET">
                                    <button type="button" class="btn btn-outline-dark btn-editar" data-delideres='@json($item)' data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="">
                                        <span class="fa-solid fa-square-pen"></span>
                                    </button>
                                </form>
                            </td>
                            <td>{{$item->encuentro->nombre}}</td>
                            <td>{{$item->encuentro->apellido_paterno}}</td>
                            <td>{{$item->encuentro->apellido_materno}}</td>
                            <td>{{$item->encuentro->genero}}</td>
                            <td>{{$item->primeraclase_m_uno}}</td>
                            <td>{{$item->segundaclase_m_uno}}</td>
                            <td>{{$item->terceraclase_m_uno}}</td>
                            <td>{{$item->cuartaclase_m_uno}}</td>
                            <td>{{$item->primeraclase_m_dos}}</td>
                            <td>{{$item->segundaclase_m_dos}}</td>
                            <td>{{$item->terceraclase_m_dos}}</td>
                            <td>{{$item->cuartaclase_m_dos}}</td>
                            <td>{{$item->primeraclase_m_tres}}</td>
                            <td>{{$item->segundaclase_m_tres}}</td>
                            <td>{{$item->terceraclase_m_tres}}</td>
                            <td>{{$item->cuartaclase_m_tres}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br>
                  </div>
                  <div class="botonescu">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar</button>
                  </div>
                  <div class="pddf4">
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
                      <form action="{{ route('lidere.store') }}" method="POST">
                        @csrf
                        <label for="">Nombre del Alumno</label>
                        <input type="text" name="id_encuentro" class="form-control" required value="">
                        <label for="">MODULO 1</label>
                        <br>
                        <label for="">1ra Clase</label>
                        <input type="text" name="primeraclase_m_uno" class="form-control" value="">
                        <label for="">2da Clase</label>
                        <input type="text" name="segundaclase_m_uno" class="form-control" value=""> 
                        <label for="">3ra Clase</label>
                        <input type="text" name="terceraclase_m_uno" class="form-control" value=""> 
                        <label for="">4ta Clase</label>
                        <input type="text" name="cuartaclase_m_uno" class="form-control" value=""> 
                        <label for="">MODULO 2</label>
                        <br>
                        <label for="">1ra Clase</label>
                        <input type="text" name="primeraclase_m_dos" class="form-control" value=""> 
                        <label for="">2da Clase</label>
                        <input type="text" name="segundaclase_m_dos" class="form-control" value=""> 
                        <label for="">3ra Clase</label>
                        <input type="text" name="terceraclase_m_dos" class="form-control" value=""> 
                        <label for="">4ta Clase</label>
                        <input type="text" name="cuartaclase_m_dos" class="form-control" value=""> 
                        <label for="">MODULO 3</label>
                        <br>
                        <label for="">1ra Clase</label>
                        <input type="text" name="primeraclase_m_tres" class="form-control" value=""> 
                        <label for="">2da Clase</label>
                        <input type="text" name="segundaclase_m_tres"  class="form-control" value=""> 
                        <label for="">3ra Clase</label>
                        <input type="text" name="terceraclase_m_tres" class="form-control" value=""> 
                        <label for="">4ta Clase</label>
                        <input type="text" name="cuartaclase_m_tres" class="form-control" value=""> 
                                  
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
            <div class="contenido5"><!--aqui vendra el logo de la iglesia-->
              <div class="cajalogo5">
                <a href="{{url('/inicio')}}">
                  <img src="logo.png" width="290rem" >
                </a>
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
                            <form action="{{ route('lidere.update', 1) }}" method="POST">
                             @csrf
                             @method("PUT")
                             <label for="">N° Identificativo</label>
                             <input type="text" name="id_encuentro" id="input-id_encuentro" class="form-control" required value="">
                             <label for="">MODULO 1</label>
                             <br>
                             <label for="">1ra Clase</label>
                             <input type="text" name="primeraclase_m_uno" id="input-primerauno" class="form-control" value="">
                             <label for="">2da Clase</label>
                             <input type="text" name="segundaclase_m_uno" id="input-segunda_m_uno" class="form-control" value=""> 
                             <label for="">3ra Clase</label>
                             <input type="text" name="terceraclase_m_uno" id="input-tercera_m_uno" class="form-control" value=""> 
                             <label for="">4ta Clase</label>
                             <input type="text" name="cuartaclase_m_uno" id="input-cuarta_m_uno" class="form-control" value=""> 
                             <label for="">MODULO 2</label>
                             <br>
                             <label for="">1ra Clase</label>
                             <input type="text" name="primeraclase_m_dos" id="input-primera_m_dos" class="form-control" value=""> 
                             <label for="">2da Clase</label>
                             <input type="text" name="segundaclase_m_dos" id="input-segunda_m_dos" class="form-control" value=""> 
                             <label for="">3ra Clase</label>
                             <input type="text" name="terceraclase_m_dos" id="input-tercera_m_dos" class="form-control" value=""> 
                             <label for="">4ta Clase</label>
                             <input type="text" name="cuartaclase_m_dos" id="input-cuarta_m_dos" class="form-control" value=""> 
                             <label for="">MODULO 3</label>
                             <br>
                             <label for="">1ra Clase</label>
                             <input type="text" name="primeraclase_m_tres" id="input-primera_m_tres" class="form-control" value=""> 
                             <label for="">2da Clase</label>
                             <input type="text" name="segundaclase_m_tres" id="input-segunda_m_tres" class="form-control" value=""> 
                             <label for="">3ra Clase</label>
                             <input type="text" name="terceraclase_m_tres" id="input-tercera_m_tres" class="form-control" value=""> 
                             <label for="">4ta Clase</label>
                             <input type="text" name="cuartaclase_m_tres" id="input-cuarta_m_tres" class="form-control" value=""> 
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
        let delideres = $(this).data('delideres');
        $('#input-id_encuentro').val(delideres.id_encuentro)
        $('#input-primerauno').val(delideres.primeraclase_m_uno)
        $('#input-segunda_m_uno').val(delideres.segundaclase_m_uno)
        $('#input-tercera_m_uno').val(delideres.terceraclase_m_uno)
        $('#input-cuarta_m_uno').val(delideres.cuartaclase_m_uno)
        $('#input-primera_m_dos').val(delideres.primeraclase_m_dos)
        $('#input-segunda_m_dos').val(delideres.segundaclase_m_dos)
        $('#input-tercera_m_dos').val(delideres.terceraclase_m_dos)
        $('#input-cuarta_m_dos').val(delideres.cuartaclase_m_dos)
        $('#input-primera_m_tres').val(delideres.primeraclase_m_tres)
        $('#input-segunda_m_tres').val(delideres.segundaclase_m_tres)
        $('#input-tercera_m_tres').val(delideres.terceraclase_m_tres)
        $('#input-cuarta_m_tres').val(delideres.cuartaclase_m_tres)
      });
    });
  </script>
@endsection