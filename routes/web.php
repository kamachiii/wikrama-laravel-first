<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::middleware('guest')->group(function() {
    //? Halaman register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/registerStore', [RegisterController::class, 'store'])->name('registerStore');

    // ? Halaman Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/loginStore', [LoginController::class, 'store'])->name('loginStore');

});


Route::middleware('auth')->group(function() {
    //? Halaman Dashboard dll
    Route::get('/', [HelloController::class, 'index'])->name('index');

    Route::get('/history', [HelloController::class, 'history'])->name('history');

    Route::get('/create', [HelloController::class, 'create'])->name('create');

    Route::get('/edit/{id}', [HelloController::class, 'edit'])->name('edit');

    Route::get('/about', [HelloController::class, 'about'])->name('about');

    Route::get('/search', [HelloController::class, 'search'])->name('search');

    Route::post('/storeActivity', [HelloController::class, 'storeActivity'])->name('storeActivity');

    Route::post('/update/{id}', [HelloController::class, 'update'])->name('update');

    Route::post('/destroy/{id}', [HelloController::class, 'destroy'])->name('destroy');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
