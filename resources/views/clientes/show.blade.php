@extends('layout.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
    <p><strong>DUI:</strong> {{ $cliente->dui }}</p>
    <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
    <p><strong>Correo:</strong> {{ $cliente->correo }}</p>
    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?');">Eliminar</button>
    </form>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
