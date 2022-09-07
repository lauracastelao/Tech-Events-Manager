<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SessionsController;



Route::name('products')->group(function(){


    Route::get('/', [ProductController::class, 'index'])->name('products.index');

    Route::get('/create',[ProductController::class, 'create'])->name('products.create');

    Route::post('/',[ProductController::class,'store'])->name('products.store');

    Route::get('/products/{id}',[ProductController::class, 'show'])->name('products.show');

    Route::delete('/products/{id}',[ProductController::class, 'destroy'])->name('products.delete');

    Route::get('/products/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');

    Route::get('/products/create',[ProductController::class, 'create']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::resource('image', 'ImageController');

Route::get('/send-email',[MailController::class,'sendEmail']);