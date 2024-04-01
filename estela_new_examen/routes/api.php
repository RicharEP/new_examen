<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('animal', [AnimalController::class, 'index']);
Route::get('animal/{id}', [AnimalController::class, 'show']);
Route::post('animal', [AnimalController::class, 'store']);
Route::patch('animal/{id}', [AnimalController::class, 'update']);
Route::delete('animal/{id}', [AnimalController::class, 'destroy']);


Route::get('usuario', [UsuarioController::class, 'index']);
Route::get('usuario/{id}', [UsuarioController::class, 'show']);
Route::post('usuario', [UsuarioController::class, 'store']);
Route::patch('usuario/{id}', [UsuarioController::class, 'update']);
Route::delete('usuario/{id}', [UsuarioController::class, 'destroy']);