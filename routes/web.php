<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SessionsController;


Route::get('/home', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::resource('image', 'ImageController');


Route::get('/detail', function () {
    return view('detail');
});
