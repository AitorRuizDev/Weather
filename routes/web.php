<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/weather', function () {
//     return view('weather');
// })->middleware(['auth'])->name('weather');

// Route::get('/view', function () {
//     return view('view');
// })->middleware(['auth'])->name('view');

// Route::match(['get', 'post'], '/view', function () {
//     return view('view');
// })->middleware(['auth'])->name('view');

// Route::get('/top', function () {
//     return view('top');
// })->middleware(['auth'])->name('top');

Route::get('/weather.index', [WeatherController::class, 'index'])->name('weather.index');
// Route::get('/weather.create', [WeatherController::class, 'create'])->name('weather.create');
// Route::post('/weather.store', [WeatherController::class, 'store'])->name('weather.store');
// Route::get('/weather.view/{weather}',[WeatherController::class, 'show'])->name('weather.view');
// // Route::get('/weather.view/{weather}', [WeatherController::class, 'show'])->name('weather.view');
Route::get('/weather.top', [WeatherController::class, 'top'])->name('weather.top');

Route::resources(['weather' => WeatherController::class]);



