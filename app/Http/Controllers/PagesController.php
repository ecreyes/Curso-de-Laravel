<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

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

    public function create(CreateMessageRequest $request)
    {
        return $request->all();
    }

}
