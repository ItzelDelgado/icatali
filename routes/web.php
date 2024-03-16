<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', WelcomeController::class)->name('inicio');

Route::get('/sobre-nosotros', function () {
    return view('sobre_nosotros');
})->name('sobre_nosotros');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/preguntas-frecuentes', function () {
    return view('preguntas_frecuentes');
})->name('preguntas_frecuentes');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
