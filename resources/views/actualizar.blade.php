@extends('layout.plantilla')<!-- llamar a la plantilla orginal donde esta todos los formatos-->
@section('titulo','registro de miembros')<!--seccion de titulo igual de la plantilla original -->
@section('contenido')<!-- seccion de contenido aqui tiene que ir dentro todo-->
            <form action="" method="POST">
                @method("PUT")
                @csrf
                <label for="">Lider de Celula</label>
                <input type="text" name="lider_celu" class="form-control" required value="{}">
                <label for="">N° de Celula</label>
                <input type="text" name="numero_celu" class="form-control" required value="{}">
                <label for="">Dirección</label>
                <input type="text" name="direccion" class="form-control" required value="{}">
                <label for="">Estado</label>
                <input type="text" name="estado" class="form-control" required value="{}"> 
            </div>   
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Guardar</button>
            </div>
            </form>
@endsection