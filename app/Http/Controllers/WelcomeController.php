<?php

namespace App\Http\Controllers;
use App\Models\Comentario;
use App\Models\Producto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function __invoke()
    {
        return view('welcome');
    }

    public function index()
    {
        $comentarios = Comentario::where('is_active', 1)
        ->inRandomOrder()
        ->limit(3)
        ->get();

        $productos = Producto::where('is_active', 1)
            ->latest('id')
            ->limit(3)
            ->get();

        return view('welcome', compact('comentarios', 'productos'));
    }


}
