<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'numeric',
            'mensaje' => 'required'
        ]);

        try {
            Mail::to('angelrojas@ciencias.unam.mx')->send(new ContactMailable($request->all()));
            session()->flash(
                'swal',
                [
                    'title' => "¡Bien hecho!",
                    'text' => "El correo se envió correctamente",
                    'icon' => "success"
                ]
            );
        } catch (\Exception $e) {
            session()->flash(
                'swal',
                [
                    'title' => "¡Error!",
                    'text' => "Hubo un problema al enviar el correo",
                    'icon' => "error"
                ]
            );
        }

        return view('contacto');

    }
}
