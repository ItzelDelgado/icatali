<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PreguntaFrecuenteController;
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

Route::get('/', [WelcomeController::class,'index'])->name('inicio');

Route::get('/sobre-nosotros', function () {
    return view('sobre_nosotros');
})->name('sobre_nosotros');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

// Route::get('/preguntas-frecuentes', function () {
//     return view('preguntas_frecuentes');
// })->name('preguntas_frecuentes');

Route::get('/preguntas-frecuentes', [PreguntaFrecuenteController::class,'index'])->name('preguntas_frecuentes');

Route::post('/productos/buscar', [ProductoController::class, 'buscar'])->name('productos.buscar');

Route::resource('/productos', ProductoController::class);

Route::get('contacto', [ContactController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactController::class, 'store'])->name('contacto.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
