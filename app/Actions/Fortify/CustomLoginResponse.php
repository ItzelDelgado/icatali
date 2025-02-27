<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

use Illuminate\Support\Facades\Auth;

class CustomLoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // Solo redirigir si el usuario está autenticado
        if (Auth::check()) {
            return redirect('/admin');
        }

        return redirect('/login');
    }
}
