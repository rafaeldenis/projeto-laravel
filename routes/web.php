<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/exemplo', function () {
    return view('exemplo');
});

Route::get('/cadastro-cliente', function () {
    return view('projeto-php/clientes/cadastro_cliente');
});

Route::get('/listar-cliente', function () {
    return view('projeto-php/clientes/listar_cliente');
})->name('listar-cliente');

Route::get('/visualizar-pdf', function () {
    return view('visualizar_curriculo_pdf');
});

