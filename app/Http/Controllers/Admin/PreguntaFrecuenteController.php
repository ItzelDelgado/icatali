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
        $preguntas_frecuentes = PreguntaFrecuente::latest('id')->paginate(10);
        return view('admin.preguntas_frecuentes.index', compact('preguntas_frecuentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.preguntas_frecuentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'pregunta' => 'required|string',
            'respuesta' => 'required|string|max:1500',
        ]));
        
        PreguntaFrecuente::create($request->all());
        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "La pregunta se ha agregado con éxito.",
                'icon' => "success"

            ]
        );

        return redirect()->route('admin.preguntas_frecuentes.index');
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
        return view('admin.preguntas_frecuentes.edit',compact('preguntaFrecuente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreguntaFrecuente $preguntaFrecuente)
    {
        $request->validate(([
            'pregunta' => 'required|string',
            'respuesta' => 'required|string|max:1500',
        ]));

        $preguntaFrecuente->update($request->all());

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "La pregunta frecuente se ha actualizado con éxito.",
                'icon' => "success"

            ]
        );

        return redirect()->route('admin.preguntas_frecuentes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }
}
