<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
    	$usuarios = User::All();
    	return json_encode($usuarios);
    }

    









//------------------------------login
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


    public function login()
    {
        return view('login');
    }


    public function cerrar_sesion()
    {
        Auth::logout();
        return redirect("ingreso");
    }


}
