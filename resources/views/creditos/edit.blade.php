@extends('layout.app')

@section('content')
<div class="container">
    <h1>Editar Crédito</h1>
    <form action="{{ route('creditos.update', $credito) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $cliente->id == $credito->cliente_id ? 'selected' : '' }}>
                        {{ $cliente->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto_credito" class="form-label">Monto Crédito</label>
            <input type="number" class="form-control" name="monto_credito" value="{{ $credito->monto_credito }}" required>
        </div>
        <div class="mb-3">
            <label for="tasa_interes" class="form-label">Tasa de Interés (%)</label>
            <input type="number" class="form-control" name="tasa_interes" value="{{ $credito->tasa_interes }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="estado_credito" class="form-label">Estado del Crédito</label>
            <input type="text" class="form-control" name="estado_credito" value="{{ $credito->estado_credito }}" required>
        </div>
        <div class="mb-3">
            <label for="dia_gracia" class="form-label">Días de Gracia</label>
            <input type="number" class="form-control" name="dia_gracia" value="{{ $credito->dia_gracia }}" required>
        </div>
        <div class="mb-3">
            <label for="dia_atraso" class="form-label">Días de Atraso</label>
            <input type="number" class="form-control" name="dia_atraso" value="{{ $credito->dia_atraso }}" required>
        </div>
        <div class="mb-3">
            <label for="monto_mora_diario" class="form-label">Monto Mora Diario</label>
            <input type="number" class="form-control" name="monto_mora_diario" value="{{ $credito->monto_mora_diario }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="dias_atraso" class="form-label">Días de Atraso</label>
            <input type="number" class="form-control" name="dias_atraso" value="{{ $credito->dias_atraso }}" required>
        </div>
        <div class="mb-3">
            <label for="monto_total_mora" class="form-label">Monto Total Mora</label>
            <input type="number" class="form-control" name="monto_total_mora" value="{{ $credito->monto_total_mora }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
