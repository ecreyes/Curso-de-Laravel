@extends('layout')

@section('contenido')
<h1>Contacto</h1>
@if(session()->has('info'))
	<h2>{{session('info')}}</h2>
@endif
<form  method="POST" action="{{route('mensajes.store')}}">
	{!! csrf_field()!!}
	<label for="nombre">
		Nombre<br>
		<input type="text" name="nombre" value="{{old('nombre')}}">
		{{$errors->first('nombre')}}
	</label>
	<br>	
	<label for="email">
		Email<br>
		<input type="text" name="email" value="{{old('email')}}">
		{{$errors->first('email')}}
	</label>	
	<br>
	<label for="mensaje">
		Mensaje<br>
		<textarea name="mensaje">{{old('mensaje')}}</textarea>
		{{$errors->first('mensaje')}}	
	</label>
	<br>	
	<input type="submit" value="enviar">
</form>
@stop