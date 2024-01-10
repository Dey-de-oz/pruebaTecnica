@extends('plantillas/plantillaGeneral')
@section('tituloPagina', 'Ver datos de usuario')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Resultado de busqueda
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
                        @foreach ($usuarios as $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->correo}}</td>
                                <td>{{$item->fecha_nacimiento}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{route('personas.index')}}" class="btn btn-info">Regresar</a>
            
        </div>
    </div>
@endsection
