@extends('layout.app')

@section('content')
<div class="container">
    <h1>Registrar Pago</h1>
    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf
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
            <label for="monto_pago" class="form-label">Monto Pago</label>
            <input type="number" class="form-control" name="monto_pago" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha Pago</label>
            <input type="date" class="form-control" name="fecha_pago" required>
        </div>
        <div class="mb-3">
            <label for="metodo_pago" class="form-label">Metodo Pago</label>
            <select class="form-select" name="metodo_pago" required>
                <option value="">Selecciona un metodo de pago</option>
                <option value="EFECTIVO">EFECTIVO</option>
                <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                <option value="CRÉDITO">CRÉDITO</option>
                <!-- Puedes agregar más opciones si es necesario -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
