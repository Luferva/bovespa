<?php

use App\Http\Controllers\ActiveController;
use App\Http\Controllers\BrapiApiController;
use App\Models\BrapiApiRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/active', [ActiveController::class, 'store']);
Route::get('/actives', [ActiveController::class, 'getList']);
Route::get('/active/{id}', [ActiveController::class, 'get']);
Route::post('/active/{id}', [ActiveController::class, 'update']);
Route::delete('/active/{id}', [ActiveController::class, 'destroy']);


//Route::get('/', [BrapiApiController::class, 'getList']);
Route::get('/', [BrapiApiController::class, 'getAllList']);




