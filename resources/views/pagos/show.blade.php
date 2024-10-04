@extends('layout.app')

@section('content')
<div class="container">
    <h1>Detalles del Pago</h1>
    <p><strong>Crédito:</strong> {{ $pago->credito->monto_credito }}</p>
    <p><strong>Monto Pago:</strong> {{ $pago->monto_pago }}</p>
    <p><strong>Fecha Pago:</strong> {{ $pago->fecha_pago }}</p>
    <p><strong>Método Pago:</strong> {{ $pago->metodo_pago }}</p>
    <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('pagos.destroy', $pago) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este pago?');">Eliminar</button>
    </form>
    <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
