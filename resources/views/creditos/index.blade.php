@extends('layout.app')

@section('content')
<div class="container">
    <h1>Créditos</h1>
    <a href="{{ route('creditos.create') }}" class="btn btn-primary">Registrar Crédito</a>
    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Monto Crédito</th>
                <th>Tasa de Interés</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($creditos as $credito)
                <tr>
                    <td>{{ $credito->cliente->nombre }}</td>
                    <td>{{ $credito->monto_credito }}</td>
                    <td>{{ $credito->tasa_interes }}%</td>
                    <td>{{ $credito->estado_credito }}</td>
                    <td>
                        <a href="{{ route('creditos.edit', $credito) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('creditos.destroy', $credito) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este crédito?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
