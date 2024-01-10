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
