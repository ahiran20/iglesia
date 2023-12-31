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
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="card"><!--miembros-->
                <img src="miembros.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Miembros</h5>
                  <p class="card-text">2</p>
                </div>
            </div>
            <div class="card"><!--eventos-->
                <img src="bautizo.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Bautizados</h5>
                <p class="card-text">1</p>
                </div>
            </div>
            <div class="card"><!--celulas-->
                <img src="celula.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Celulas</h5>
                <p class="card-text">{{$totalregistro}}</p>
                </div>
            </div>
            <div class="card"><!--celulas-->
                <img src="finanza.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Finanzas</h5>
                <p class="card-text">Pronto</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contenido"><!--aqui vendra el logo de la iglesia-->
      <div class="cajalogo">
          <img src="logo.png" alt="">
      </div>
    </div>
    
@endsection