@extends('layout')

@section('contenido')
<h1>Contacto</h1>
<form  method="POST" action="{{route('mensajes.update',$dato->id)}}">
	{!! csrf_field()!!}
	{!!method_field('PUT')!!}
	<label for="nombre">
		Nombre<br>
		<input type="text" name="nombre" value="{{$dato->nombre}}">
		{{$errors->first('nombre')}}
	</label>
	<br>	
	<label for="email">
		Email<br>
		<input type="text" name="email" value="{{$dato->email}}">
		{{$errors->first('email')}}
	</label>	
	<br>
	<label for="mensaje">
		Mensaje<br>
		<textarea name="mensaje">{{$dato->mensaje}}</textarea>
		{{$errors->first('mensaje')}}	
	</label>
	<br>	
	<input type="submit" value="enviar">
</form>
@stop