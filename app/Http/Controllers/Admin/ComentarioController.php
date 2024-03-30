<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios = Comentario::latest('id')
            ->paginate(10);
        return view('admin.comentarios.index', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
        $request->validate(([
            'alias' => 'required|string',
            'comentario' => 'required|string|max:355',
            'image' => 'nullable|image',
        ]));

        $data = $request->all();

        if($request->file('image')){
            // if($comentario->img_path){
            //     Storage::delete($comentario->img_path);
            // }
            $data['img_path'] = Storage::put('comentarios', $request->image);
        }

        Comentario::create($data);

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El comentario se ha agregado con éxito.",
                'icon' => "success"

            ]
        );
        return redirect()->route('admin.comentarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        
        return view('admin.comentarios.edit',compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        //return Storage::put('comentarios', $request->image);
        $request->validate(([
            'alias' => 'required|string',
            'comentario' => 'required|string|max:355',
            'image' => 'nullable',
        ]));

        $data = $request->all();

        if($request->file('image')){
            if($comentario->img_path){
                Storage::delete($comentario->img_path);
            }
            $data['img_path'] = Storage::put('comentarios', $request->image);
        }

        
        $comentario->update($data);

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El comentario se ha actualizado con éxito.",
                'icon' => "success"

            ]
        );

        return redirect()->route('admin.comentarios.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
