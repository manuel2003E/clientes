@extends('layout.app')

@section('content')
<div class="container">
    <h1>Reportes</h1>
    <a href="{{ route('reportes.create') }}" class="btn btn-primary">Registrar Reporte</a>
    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Crédito</th>
                <th>Monto Pagado</th>
                <th>Fecha Pago</th>
                <th>Tipo Reporte</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reportes as $reporte)
                <tr>
                    <td>{{ $reporte->cliente->nombre }}</td>
                    <td>{{ $reporte->credito->monto_credito }}</td>
                    <td>{{ $reporte->monto_pagado }}</td>
                    <td>{{ $reporte->fecha_pago }}</td>
                    <td>{{ $reporte->tipo_reporte }}</td>
                    <td>
                        <a href="{{ route('reportes.edit', $reporte) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('reportes.destroy', $reporte) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este reporte?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
