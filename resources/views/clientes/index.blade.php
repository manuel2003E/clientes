@extends('layout.app')

@section('content')
<div class="container">
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Registrar Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DUI</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->dui }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->correo }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
