@extends('layout.app')

@section('content')
<div class="container">
    <h1>Pagos</h1>
    <a href="{{ route('pagos.create') }}" class="btn btn-primary">Registrar Pago</a>
    <table class="table">
        <thead>
            <tr>
                <th>Crédito</th>
                <th>Monto Pago</th>
                <th>Fecha Pago</th>
                <th>Método Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
                <tr>
                    <td>{{ $pago->credito->monto_credito }}</td>
                    <td>{{ $pago->monto_pago }}</td>
                    <td>{{ $pago->fecha_pago }}</td>
                    <td>{{ $pago->metodo_pago }}</td>
                    <td>
                        <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('pagos.destroy', $pago) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este pago?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
