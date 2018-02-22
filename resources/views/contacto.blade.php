@extends('layout')

@section('contenido')
<h1>Contacto</h1>
<form  method="POST" action="{{route('contacto.create')}}">
	{!! csrf_field()!!}
	<label for="nombre">
		Nombre<br>
		<input type="text" name="nombre">
	</label>
	<br>	
	<label for="email">
		Email<br>
		<input type="text" name="email">
	</label>	
	<br>
	<label for="mensaje">
		Mensaje<br>
		<textarea name="mensaje"></textarea>
	</label>
	<br>	
	<input type="submit" value="enviar">
</form>
@stop