<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GetFreeCars;
use App\Http\Controllers\Api\DriveCar;
use App\Http\Controllers\Api\ReturnCar;

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/get-free-cars', GetFreeCars::class);
Route::get('/drive-car/{car}', DriveCar::class)->middleware('auth:sanctum');
Route::get('/return-car', ReturnCar::class)->middleware('auth:sanctum');
