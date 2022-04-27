<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;

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

Route::get('/dashboard',
    [CinemaController::class, 'dashboard']
)->middleware(['auth'])->name('dashboard');

Route::get('/showFilm/{id}',
    [CinemaController::class, 'showFilm']
)->middleware(['auth'])->name('showfilm');

Route::get('/showFilmsByGenre/{id}',
    [CinemaController::class, 'showFilmsByGenre']
)->middleware(['auth'])->name('showfilmsbygenre');

require __DIR__.'/auth.php';
