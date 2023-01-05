<?php

use App\Http\Controllers\ActiveController;
use App\Http\Controllers\BalanceController;

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

//Rota de acesso Usuário: Perfil e Saldo

Route::get('/usuário/balance', [BalanceController::class, 'consultaSaldo']);

Route::get('/usuário/balance/getlist', [BalanceController::class, 'getList']);








Route::post('/active', [ActiveController::class, 'store']);
Route::get('/actives', [ActiveController::class, 'getList']);
Route::get('/active/{id}', [ActiveController::class, 'get']);
Route::post('/active/{id}', [ActiveController::class, 'update']);
Route::delete('/active/{id}', [ActiveController::class, 'destroy']); 


//Rota da API
Route::get('/', [BrapiApiController::class, 'getAllList'])->name('home');
Route::get('/getticker/{ticker}', [BrapiApiController::class, 'getTicker']);









//Rota do Jetstream para login e register
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
