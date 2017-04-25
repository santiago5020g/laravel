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
        if (Auth::attempt(['cedula' => $request->usuario, 'password' => $request->clave ],$request->recuerdame)) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        else
        {
            \Session::flash('flash_message','Credenciales incorrectas');
            return redirect('ingreso');
        }
    }


    public function index()
    {
        return view('login.index');
    }


    public function cerrar_sesion()
    {
        Auth::logout();
        return redirect('ingreso');
    }


}
