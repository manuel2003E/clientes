<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReporteController;

// Define la ruta para la página de inicio y nómbrala 'home'
Route::get('/home', function () {
    return view('home');
})->name('home');

// Rutas para los controladores
Route::resource('clientes', ClienteController::class);
Route::resource('creditos', CreditoController::class);
Route::resource('pagos', PagoController::class);
Route::resource('reportes', ReporteController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
