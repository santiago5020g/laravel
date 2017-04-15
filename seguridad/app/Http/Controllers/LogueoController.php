<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogueoController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->usuario, 'password' => $request->clave ],$request->recuerdame)) {
            // Authentication passed...
            return redirect()->intended('usuarios');
        }
        else
        {
            echo "Credenciales incorrectas";
        }
    }


    public function index()
    {
        return view('login.index');
    }


    public function cerrar_sesion()
    {
        Auth::logout();
        return view('login.index');
    }


}