@extends('plantillas/plantillaGeneral')
@section('tituloPagina', 'Editar usuario')

@section('contenido')
<div class="row">
    <div class="col-md-4 offset-3" id="barra_nav">
        <h3>Editando usuario: {{$persona->nombre}}</h3>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <!-- Formulario de creacion de usuarios
            Para acceder al controlador, se utliza el nombre (name()) definido para esa ruta
            -->
            <form action="{{route('personas.update',$persona->id)}}" method="post">
                @csrf
                @method("PUT")
                <label for="">Nombre de usuario</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{$persona->nombre}}" required>
                <label for="">Correo:</label>
                <input type="email" id="correo" name="correo" class="form-control" value="{{$persona->correo}}" required>
                <label for="">Fecha de nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{$persona->fecha_nacimiento}}" required>
                <br>
                <a href="{{route('personas.index')}}" class="btn btn-info"><i class="fas fa-undo-alt"></i></a>
                <button class="btn btn-success">Editar <i class="fas fa-user-edit"></i> </button>
            </form>
        </div>
    </div>
@endsection