<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomarController;

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

Route::get('/user/{id}',[CustomarController::class,'showCustomar']);

Route::get('/users',[CustomarController::class,'index']);

Route::post('/add-user',[CustomarController::class,'newCustomar']);
Route::post('/users/{id}/tags',[UserController::class, 'create']);
Route::get('/users/{tags}',[UserController::class, 'all']);




