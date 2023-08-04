<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ExcelExportController;
use App\Http\Controllers\MinhaSenhaController;
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

Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::get('clientes/cadastro/{cliente?}', [ClienteController::class, 'cadastro'])->name('clientes.cadastro');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

Route::get('/listar-cliente', function () {
    return view('projeto-php/clientes/listar_cliente');
})->name('listar-cliente');

Route::get('/visualizar-pdf', function () {
    return view('visualizar_curriculo_pdf');
});


Route::get('/minhas-senhas', [MinhaSenhaController::class, 'index'])->name('minhas_senhas.index');
Route::get('/minhas-senhas/create', [MinhaSenhaController::class, 'create'])->name('minhas_senhas.create');
Route::post('/minhas-senhas', [MinhaSenhaController::class, 'store'])->name('minhas_senhas.store');
Route::get('/minhas-senhas/{senha}/edit', [MinhaSenhaController::class, 'edit'])->name('minhas_senhas.edit');
Route::put('/minhas-senhas/{senha}', [MinhaSenhaController::class, 'update'])->name('minhas_senhas.update');
Route::delete('/minhas-senhas/{senha}', [MinhaSenhaController::class, 'destroy'])->name('minhas_senhas.destroy');

Route::get('/export', [ExcelExportController::class, 'export'])->name('export');
