<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            // Usuario autenticado, mostrar la vista deseada para usuarios autenticados
            return view('home');
        } else {
            // Usuario no autenticado, redirigir a la página de inicio de sesión
            return redirect()->route('login');
        }
    }
}
