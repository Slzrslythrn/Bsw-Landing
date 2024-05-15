<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{menu}/kategori', [HomeController::class, 'menuKategeori'])->name('menu.kategori');

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/logout', 'LoginController@logout')->name('logout');