@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','Iglesia Bethel')<!--seccion de titulo igual de la plantilla original -->
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
                <a class="nav-link" href="">BAUTIZADOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ESCUELA DE LIDERES</a>
            </li>
            </ul>
        </div>
        <div class="contenidobau">
            <div class="cajitabau">
              <div class="titlebau ">
                <h5>REGISTROS DE LAS PERSONAS BAUTIZADAS</h5>
              </div>
              <div class="cajabau">
                <table class="table table-sm table-bordered">
                  <thead>
                      <th>N°</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>GENERO</th>
                      <th>FECHA DE BAUTISMO</th>
                      
                  </thead>
                  <tbody>
                    
                    <tr>
                      
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
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
                    
                  </tbody>
                </table>
              </div>
              <div class="botonagre"><!--va en la la parte de celula su estilo-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar</button>
              </div>
            </div>
        </div>
@endsection