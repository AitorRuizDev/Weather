<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/weather', function () {
    return view('weather');
})->middleware(['auth'])->name('weather');

Route::get('/view', function () {
    return view('view');
})->middleware(['auth'])->name('view');

Route::match(['get', 'post'], '/view', function () {
    return view('view');
})->middleware(['auth'])->name('view');

Route::get('/top', function () {
    return view('top');
})->middleware(['auth'])->name('top');

require __DIR__.'/auth.php';
