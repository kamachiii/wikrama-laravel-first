<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Models\Activity;
use Illuminate\Http\Request;


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
Route::get('/', [HelloController::class, 'index'])->name('index');

Route::get('/history', [HelloController::class, 'history'])->name('history');

Route::get('/create', [HelloController::class, 'create'])->name('create');

Route::get('/edit/{id}', [HelloController::class, 'edit'])->name('edit');

Route::get('/about', [HelloController::class, 'about'])->name('about');

Route::get('/search', [HelloController::class, 'search'])->name('search');

Route::post('/storeActivity', [HelloController::class, 'storeActivity'])->name('storeActivity');

Route::post('/update/{id}', [HelloController::class, 'update'])->name('update');

Route::post('/delete/{id}', [HelloController::class, 'delete'])->name('delete');
