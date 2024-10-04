@extends('layout.app')

@section('content')
<div class="container">
    <h1>Editar Pago</h1>
    <form action="{{ route('pagos.update', $pago) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="credito_id" class="form-label">Crédito</label>
            <select class="form-select" name="credito_id" required>
                @foreach($creditos as $credito)
                    <option value="{{ $credito->id }}" {{ $credito->id == $pago->credito_id ? 'selected' : '' }}>
                        {{ $credito->monto_credito }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto_pago" class="form-label">Monto Pago</label>
            <input type="number" class="form-control" name="monto_pago" value="{{ $pago->monto_pago }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha Pago</label>
            <input type="date" class="form-control" name="fecha_pago" value="{{ $pago->fecha_pago }}" required>
        </div>
        <div class="mb-3">
            <label for="metodo_pago" class="form-label">Método Pago</label>
            <input type="text" class="form-control" name="metodo_pago" value="{{ $pago->metodo_pago }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
