<?php

use App\Http\Controllers\Admin\ComentarioController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PreguntaFrecuenteController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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
});


Route::resource('/comentarios', ComentarioController::class)
->except(['show','destroy']);
// ->middleware(['can:gestionar comentarios']);

Route::resource('/users', UserController::class);
    // ->middleware(['can:gestionar usuarios']);

Route::resource('/preguntas_frecuentes', PreguntaFrecuenteController::class)
->parameter('preguntas_frecuentes','pregunta_frecuente')
->except(['show','destroy']);
// ->middleware(['can:gestionar preguntas frecuentes']);

Route::resource('/productos', ProductoController::class);
    // ->middleware(['can:gestionar productos']);

Route::resource('/roles', RoleController::class);
    // ->middleware(['can:gestionar roles']);
// Route::resource('/permissions', PermissionController::class);
    // ->middleware(['can:gestionar permisos']);
