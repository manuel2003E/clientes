@extends('layout.app')

@section('content')
<div class="container">
    <h1>Registrar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" class="form-control" name="dui" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
