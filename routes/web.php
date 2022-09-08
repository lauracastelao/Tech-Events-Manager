<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SessionsController;



Route::name('products')->group(function(){


    Route::get('/', [ProductController::class, 'index'])->name('.index');

    Route::get('/create',[ProductController::class, 'create'])->name('.create');

    Route::post('/',[ProductController::class,'store'])->name('.store');

    Route::get('/products/{id}',[ProductController::class, 'show'])->name('.show');

    Route::delete('/products/{id}',[ProductController::class, 'destroy'])->name('.delete');

    Route::get('/products/{id}/edit',[ProductController::class, 'edit'])->name('.edit');

    Route::get('/products/create',[ProductController::class, 'create']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::resource('image', 'ImageController');

Route::get('/send-email',[MailController::class,'sendEmail']);