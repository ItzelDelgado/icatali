<?php

use App\Http\Controllers\Admin\ComentarioController;
use App\Http\Controllers\Admin\PreguntaFrecuenteController;
use App\Models\PreguntaFrecuente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //     session()->flash('swal', [
    //         'icon'=>"error",
    //         'title'=>"Oops...",
    //         'text'=>"Something went wrong :(!",
    //         'footer'=>'<a href="#">Why do I have this issue?</a>'
    // ]);
    return view('admin.dashboard');
    //return "Hola desde el admin";
})->name('dashboard');


Route::resource('/comentarios', ComentarioController::class)
->except(['show','destroy']);

Route::resource('/preguntas_frecuentes', PreguntaFrecuenteController::class)
->parameter('preguntas_frecuentes','pregunta_frecuente')
->except(['show','destroy']);