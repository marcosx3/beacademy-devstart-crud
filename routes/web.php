<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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


//  LOGIN
Route::get('/', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');

// CADASTRA PRODUTO
Route::post('/produtos/cadastro', [ProductController::class, 'register']);
Route::get('/produtos/cadastro', [ProductController::class, 'registerView']);
// LISTAR PRODUTO
Route::get('/produtos/lista', [ProductController::class, 'show'])->name('product.show');

// ATUALIZA PRODUTO
Route::post('/produtos/update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/produtos/atualiza/{id}', [ProductController::class, 'edit'])->name('product.editar');

// DELETA PRODUTO
Route::post('/produtos/remove/{id}', [ProductController::class, 'remove'])->name('remove');
Route::get('/produtos/delete/{id}', [ProductController::class, 'destroy'])->name('product.deletar');
