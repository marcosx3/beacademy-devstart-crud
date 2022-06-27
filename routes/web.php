<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', function () {
    return view('pages/cadastro');
});

//  LOGIN
Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::get('auth/register',[MainController::class,'register'])->name('auth.register');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

// LISTAR PRODUTO
Route::get('/lista',[ProdutoController::class,'lista']);

    // Atualizar
// Route::get('atualiza',[ProdutoController::class,'atualiza']);
// Route::post('atualiza',[ProdutoController::class,'atualiza']);

Route::post('cadastro',[ProdutoController::class,'cadastra']);
