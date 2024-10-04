@extends('layout.app')

@section('content')
<div class="container">
    <h1>Registrar Reporte</h1>
    <form action="{{ route('reportes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" required>
                <option value="">Selecciona un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="credito_id" class="form-label">Crédito</label>
            <select class="form-select" name="credito_id" required>
                <option value="">Selecciona un crédito</option>
                @foreach($creditos as $credito)
                    <option value="{{ $credito->id }}">{{ $credito->monto_credito }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto_pagado" class="form-label">Monto Pagado</label>
            <input type="number" class="form-control" name="monto_pagado" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha Pago</label>
            <input type="date" class="form-control" name="fecha_pago" required>
        </div>
        <div class="mb-3">
            <label for="tipo_reporte" class="form-label">Tipo Reporte</label>
            <select class="form-select" name="tipo_reporte" required>
                <option value="">Selecciona un tipo de reporte</option>
                <option value="PDF">PDF</option>
                <!-- Puedes agregar más opciones si es necesario -->
            </select>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea class="form-control" name="observaciones"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
