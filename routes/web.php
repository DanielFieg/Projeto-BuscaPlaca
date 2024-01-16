<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\VeiculoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/saveContato', [ContatoController::class, 'saveContato'])->name('saveContato');
Route::post('/dadosVeiculoByPlaca', [VeiculoController::class, 'dadosVeiculoByPlaca'])->name('dadosVeiculoByPlaca');
Route::get('/resultVeiculo/{placa}', [VeiculoController::class, 'viewResultVeiculo'])->name('resultVeiculo');
