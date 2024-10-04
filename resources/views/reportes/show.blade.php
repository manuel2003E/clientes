@extends('layout.app')

@section('content')
<div class="container">
    <h1>Detalles del Reporte</h1>
    <p><strong>Cliente:</strong> {{ $reporte->cliente->nombre }}</p>
    <p><strong>Crédito:</strong> {{ $reporte->credito->monto_credito }}</p>
    <p><strong>Monto Pagado:</strong> {{ $reporte->monto_pagado }}</p>
    <p><strong>Fecha Pago:</strong> {{ $reporte->fecha_pago }}</p>
    <p><strong>Tipo Reporte:</strong> {{ $reporte->tipo_reporte }}</p>
    <p><strong>Observaciones:</strong> {{ $reporte->observaciones }}</p>
    <a href="{{ route('reportes.edit', $reporte) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('reportes.destroy', $reporte) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este reporte?');">Eliminar</button>
    </form>
    <a href="{{ route('reportes.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
