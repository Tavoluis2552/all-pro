<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Ruta publica para el registro de usuarios
Route::post('/register', [AuthController::class, 'register']);

//Ruta publica para el ingreso de usuarios
Route::post('/login', [AuthController::class, 'login']);

//Ruta publica para ver el registro de datos
Route::get('/products', [ProductController::class, 'index']);

//Rutas protegidas por Sanctum
Route::middleware('auth:sanctum')->group(function () {

    //Ruta interna para cerrar sesión
    Route::post('/logout', [AuthController::class, 'logout']);

    //Ruta interna para ver el usuario autenticado
    Route::get('/me', [AuthController::class, 'me']);
});