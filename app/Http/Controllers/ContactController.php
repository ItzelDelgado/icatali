<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contacto');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email',
            'telefono' => 'numeric',
            'mensaje' => 'required'
        ]);

        Mail::to('angelrojas@ciencias.unam.mx')->send(new ContactMailable($request->all()));

        return view('contacto');
    }
}
