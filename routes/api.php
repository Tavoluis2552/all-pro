<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Ruta publica para el registro de usuarios
Route::post('/register', [AuthController::class, 'register']);

//Ruta publica para el ingreso de usuarios
Route::post('/login', [AuthController::class, 'login']);