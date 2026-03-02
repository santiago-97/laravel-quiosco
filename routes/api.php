<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API Categorias /api/categorias
Route::apiResource('/categorias', CategoriaController::class)->middleware('auth:sanctum');

// API Productos /api/productos
Route::apiResource('/productos', ProductoController::class)->middleware('auth:sanctum');

// API Pedidos /api/pedidos
// Almacenar Ordenes
Route::apiResource('/pedidos', PedidoController::class)->middleware('auth:sanctum');

//  Autenticacion
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

