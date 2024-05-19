<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::where('is_active', 1)
            ->latest('id')
            ->get();

        return view('productos', compact('productos'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('producto', compact('producto'));
    }

    public function buscar(Request $request)
    {

        $searchTerm = $request->input('keyword'); // Reemplaza 'cadena_a_buscar' con la cadena que deseas buscar

        $productos = Producto::where('is_active', 1)
            ->where(function ($query) use ($searchTerm) {
                $query->where('nombre', 'like', '%' . $searchTerm . '%')
                    ->orWhere('descripcion', 'like', '%' . $searchTerm . '%')
                    ->orWhere('beneficios', 'like', '%' . $searchTerm . '%')
                    ->orWhere('ingredientes', 'like', '%' . $searchTerm . '%');
            })
            ->latest('id')
            ->get();

        return view('productos', compact('productos'));
    }
}
