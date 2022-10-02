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
//get api
Route::get('/customar/{id}',[CustomarController::class,'showCustomar']);
Route::get('/customars',[CustomarController::class,'index']);
Route::post('/add-customar',[CustomarController::class,'newCustomar']);
Route::get('/delete-customar/{id}',[CustomarController::class,'destroyClient']);
Route::post('/update-customar',[CustomarController::class,'updateClient']);


