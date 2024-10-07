<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::latest('id')->paginate(10);

        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //return $request->all();
        $request->validate(([
            'nombre' => 'required|string',
            'slug' => 'required|unique:productos',
            'descripcion' => 'required|string|max:2500',
            'precio' => 'required|numeric',
            'precio_descuento' => 'nullable|numeric',
            'imagePrincipal' => 'nullable|image',
            'imageEmpaque' => 'nullable|image',
            'imageIzq' => 'nullable|image',
            'imageDer' => 'nullable|image'

        ]));

        $data = $request->all();
        if ($request->input('beneficios') !== null) {
            $beneficios_arr = $request->input('beneficios');
            //dump($beneficios_arr);
            $beneficios = '';

            $count = count($beneficios_arr);
            foreach ($beneficios_arr as $index => $beneficio) {
                if ($beneficio !== null) {
                    $beneficios .= $beneficio;
                    // Si no es el último beneficio, agregamos una coma
                    if ($index < $count - 1) {
                        $beneficios .= ',';
                    }
                }
            }

            $data['beneficios'] = $beneficios;
        }

        //dump($beneficios);


        if ($request->input('ingredientes') !== null) {
            $ingredientes_arr = $request->input('ingredientes');
            //dump($ingredientes_arr);
            $ingredientes = '';

            $count = count($ingredientes_arr);
            foreach ($ingredientes_arr as $index => $ingrediente) {
                if ($ingrediente !== null) {
                    $ingredientes .= $ingrediente;
                    // Si no es el último beneficio, agregamos una coma
                    if ($index < $count - 1 && $ingrediente !== null) {
                        $ingredientes .= ',';
                    }
                }
            }
            $data['ingredientes'] = $ingredientes;
        }


        //dump($ingredientes);



        if ($request->hasFile('imagePrincipal')) {
            // if($comentario->img_path){
            //     Storage::delete($comentario->img_path);
            // }
            $data['img_path_principal'] = Storage::put('productos', $request->imagePrincipal);
        }

        if ($request->hasFile('imageEmpaque')) {
            // if($comentario->img_path){
            //     Storage::delete($comentario->img_path);
            // }
            $data['img_path_paquete'] = Storage::put('productos', $request->imageEmpaque);
        }

        if ($request->hasFile('imageIzq')) {
            // if($comentario->img_path){
            //     Storage::delete($comentario->img_path);
            // }
            $data['img_path_izq'] = Storage::put('productos', $request->imageIzq);
        }

        if ($request->hasFile('imageDer')) {
            // if($comentario->img_path){
            //     Storage::delete($comentario->img_path);
            // }
            $data['img_path_der'] = Storage::put('productos', $request->imageDer);
        }
        Producto::create($data);

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El producto se ha agregado con éxito.",
                'icon' => "success"

            ]
        );
        return redirect()->route('admin.productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {

        return view('admin.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {

        return view('admin.productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //return $request->all();
        $request->validate(([
            'nombre' => 'required|string',
            'slug' => 'required|unique:productos,slug,' . $producto->id,
            'descripcion' => 'required|string|max:2500',
            'precio' => 'required|numeric',
            'precio_descuento' => 'nullable|numeric',
            'imagePrincipal' => 'nullable|image',
            'imageEmpaque' => 'nullable|image',
            'imageIzq' => 'nullable|image',
            'imageDer' => 'nullable|image'

        ]));

        $data = $request->all();
        if ($request->input('beneficios') !== null) {
            $beneficios_arr = $request->input('beneficios');
            //dump($beneficios_arr);
            $beneficios = '';

            $count = count($beneficios_arr);
            foreach ($beneficios_arr as $index => $beneficio) {
                if ($beneficio !== null) {
                    $beneficios .= $beneficio;
                    // Si no es el último beneficio, agregamos una coma
                    if ($index < $count - 1) {
                        $beneficios .= ',';
                    }
                }
            }

            $data['beneficios'] = $beneficios;
        }

        //dump($beneficios);


        if ($request->input('beneficios') !== null) {
            $ingredientes_arr = $request->input('ingredientes');
            //dump($ingredientes_arr);
            $ingredientes = '';

            $count = count($ingredientes_arr);
            foreach ($ingredientes_arr as $index => $ingrediente) {
                if ($ingrediente !== null) {
                    $ingredientes .= $ingrediente;
                    // Si no es el último beneficio, agregamos una coma
                    if ($index < $count - 1) {
                        $ingredientes .= ',';
                    }
                }
            }
            $data['ingredientes'] = $ingredientes;
        }

        if ($request->hasFile('imagePrincipal')) {
            if ($producto->img_path) {
                Storage::delete($producto->img_path);
            }
            $data['img_path_principal'] = Storage::put('productos', $request->imagePrincipal);
        }
        // if ($request->hasFile('imagePrincipal')== null) {
        //     if ($producto->img_path) {
        //         Storage::delete($producto->img_path);
        //     }
        //     $data['img_path_principal'] = null;
        // }

        if ($request->hasFile('imageEmpaque')) {
            if ($producto->img_path_paquete) {
                Storage::delete($producto->img_path_paquete);
            }
            $data['img_path_paquete'] = Storage::put('productos', $request->imageEmpaque);
        }
        // if ($request->hasFile('imageEmpaque')== null) {
        //     if ($producto->img_path) {
        //         Storage::delete($producto->img_path);
        //     }
        //     $data['img_path_paquete'] = null;
        // }

        if ($request->hasFile('imageIzq')) {
            if ($producto->img_path_izq) {
                Storage::delete($producto->img_path_izq);
            }
            $data['img_path_izq'] = Storage::put('productos', $request->imageIzq);
        }

        // if ($request->hasFile('imageIzq')== null) {
        //     if ($producto->img_path) {
        //         Storage::delete($producto->img_path);
        //     }
        //     $data['img_path_izq'] = null;
        // }

        if ($request->hasFile('imageDer')) {
            if ($producto->img_path_der) {
                Storage::delete($producto->img_path_der);
            }
            $data['img_path_der'] = Storage::put('productos', $request->imageDer);
        }

        // if ($request->hasFile('imageDer') == '0') {
        //     if ($producto->img_path) {
        //         Storage::delete($producto->img_path);
        //     }
        //     $data['img_path_der'] = null;
        // }
        $producto->update($data);

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El producto se ha agregado con éxito.",
                'icon' => "success"

            ]
        );
        return redirect()->route('admin.productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
