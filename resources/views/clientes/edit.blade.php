@extends('layout.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" class="form-control" name="dui" value="{{ $cliente->dui }}" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" value="{{ $cliente->direccion }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" value="{{ $cliente->correo }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
