<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {

    Route::post('/produtos/cadastro', [ProductController::class, 'register']);
    Route::get('/produtos/cadastro', [ProductController::class, 'registerView']);

    Route::get('/produtos/lista', [ProductController::class, 'show'])->name('product.show');

    Route::post('/produtos/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::get('/produtos/atualiza/{id}', [ProductController::class, 'edit'])->name('product.editar');

    Route::post('/produtos/remove/{id}', [ProductController::class, 'remove'])->name('remove');
    Route::get('/produtos/delete/{id}', [ProductController::class, 'destroy'])->name('product.deletar');
});
