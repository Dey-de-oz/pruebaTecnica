@extends('plantillas/plantillaGeneral')
@section('tituloPagina', 'Pagina principal')
@section('contenido')
    <div class="row">
        <div class="col-md-5 offset-3">
            <h3>Sistema de gestión de Usuarios</h3>
        </div>
        <hr>
    </div>
    <div class="row">
        <h3>Usuarios registrados</h3>
        @if ($mensaje = Session::get('message'))
            <!-- Manejo de errores: El mensaje enviado por el controlador se guarda como un elemento temporal de sesion
                y se consulta. EN caso de que no exista un objeto mensaje no construye este elemento -->
            <div class="alert alert-info" role="alert">
                {{ $mensaje }}
            </div>
        @endif
        <p>
        <div class="row">
            <div class="col-sm-3">
                <a href="{{ route('personas.add') }}" class="btn btn-success btn-sm">Agregar usuario <i
                        class="fas fa-user-plus"></i></a>
            </div>
        </div>
        </p>
        <div class="col-md-6">
            <div class="table table-responsive">
                <table class="table table-borderer">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Ver info</td>
                            <td>Editar </td>
                            <td>Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Se consulta el objeto Personas que proporciona la ruta -->
                        @foreach ($personas as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>
                                    <form action="{{ route('personas.user', $item->id) }}">
                                        <button class="btn btn-info"><i class="fas fa-address-card"></i></button>
                                    </form>
                                    
                                </td>
                                <td>
                                    <form action="{{ route('personas.edit', $item->id) }}">
                                        <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('personas.show', $item->id) }}">
                                        <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                                    </form>
                                    

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr>



    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="d-flex">
                <label for="">Buscar por nombre</label>
                <input class="form-control me-2" type="search" placeholder="Nombre de usuario" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form action="">
                <label for="">Buscar por rango de fechas</label>
                <input type="date" name="fecha_ini" id="fecha_ini" class="form-control">
                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
                <button class="btn btn-success">Buscar</button>
            </form>
        </div>
    </div>
@endsection
