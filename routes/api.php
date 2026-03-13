<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\ProductoController;
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
////Imagenes
//// Post
Route::post('get_imagenes_by_ubicacion', [ImagenesController::class, 'get_imagenes_by_ubicacion']);

//Productos
// Get
Route::get('get_productos_and_categoria', [ProductoController::class, 'get_productos_and_categoria']);