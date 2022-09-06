<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SessionsController;



Route::name('products')->group(function(){

    
    Route::get('/', [ProductController::class, 'index']);

    Route::get('/products/create',[ProductController::class, 'create']);

    

    Route::get('/products/{id}',[ProductController::class, 'show'])->name('products.show');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::resource('image', 'ImageController');

