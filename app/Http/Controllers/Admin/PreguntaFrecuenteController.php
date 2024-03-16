<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PreguntaFrecuente;
use Illuminate\Http\Request;

class PreguntaFrecuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas_frecuentes = PreguntaFrecuente::paginate();
        return view('admin.preguntas_frecuentes.index', compact('preguntas_frecuentes'));
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
    public function show(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }
}
