<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home');
    }

    public function contacto()
    {
    	return view('contacto');
    }

    public function saludo($nombre='Invitado')
    {
    	return view('saludo',compact('nombre'));
    }

    public function create(Request $request)
    {
        return $request->all();
    }

}
