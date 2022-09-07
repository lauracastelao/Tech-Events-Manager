<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SessionsController;



Route::name('products')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('.index');
    Route::get('/products/create',[ProductController::class, 'create'])->name('.create');
    Route::post('/', [ProductController::class, 'store'])->name('.store');    
    Route::delete('/{id}', [ProductController::class, 'delete'])->name('.delete');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('.update');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::resource('image', 'ImageController');

