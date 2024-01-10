@extends('plantillas/plantillaGeneral')
@section('tituloPagina', 'Agregar usuario')

@section('contenido')
    <div class="card">
        <div class="card-header">
            ¿Desea eliminar el registro {{ $personas->nombre }} ?
        </div>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas->nombre }}</td>
                            <td>{{ $personas->correo }}</td>
                            <td>{{ $personas->fecha_nacimiento }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route('personas.index')}}" class="btn btn-info">Regresar</a>
            <form action="{{route('personas.drop',$personas->id)}}" method="post">
                @csrf
                @method("DELETE")
                <button class="btn btn-success">Eliminar usuario</button>
            </form>
        </div>
    </div>
@endsection
