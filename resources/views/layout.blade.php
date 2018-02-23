<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi sitio</title>

	<style>
		.active{
			text-decoration: none;
			color: green;
		}
	</style>
</head>
<body>
	<?php
	function activeMenu($url)
	{
		return request()->is($url)? 'active':'';
	}
	 ?>
	<header>
		<a href="{{route('home')}}" class="{{activeMenu('/')}}">Inicio</a>
		<a href="{{route('saludo')}}" class="{{activeMenu('saludo')}}">Saludo</a>
		<a href="{{route('mensajes.index')}}" class="{{activeMenu('mensajes')}}">Mensajes</a>
	</header>
@yield('contenido')	

</body>
</html>