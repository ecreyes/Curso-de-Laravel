@extends('layout')

@section('contenido')
<h1>Mostrando mensaje</h1>
 	<p>Nombre: {{$dato->nombre}}</p>
 	<p>Email: {{$dato->email}}</p>
	<p>Mensaje: {{$dato->mensaje}}</p>
@stop