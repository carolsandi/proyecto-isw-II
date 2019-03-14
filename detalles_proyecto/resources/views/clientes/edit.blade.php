@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card border-light mx-auto mb-5" id="custom">
            <div class="card-header text-center">
                <h5>Editar cliente</h5>
            </div>
            <div class="p-4 shadow">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ action('ClienteController@update', $cliente->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" value="{{ $cliente->contacto->cedula }}" class="form-control" placeholder="Cédula" name="cedula">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" value="{{ $cliente->contacto->nombre }}" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" value="{{ $cliente->contacto->apellido }}" class="form-control" placeholder="Apellido" name="apellido">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="text" value="{{ $cliente->contacto->correo }}" class="form-control" placeholder="Correo" name="correo">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" value="{{ $cliente->contacto->telefono }}" class="form-control" placeholder="Teléfono" name="telefono">
                    </div>
                    <div class="text-center w-50 mx-auto pt-2">
                        <button type="submit" class="btn btn-primary btn-block"><strong>Guardar</strong></button>
                        <a href="{{ url('clientes') }}" class="btn btn-secondary btn-block"><strong>Cancelar</strong></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection