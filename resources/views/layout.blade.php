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
		<a href="{{route('contacto')}}" class="{{activeMenu('contacto')}}">Contacto</a>
	</header>
@yield('contenido')	

</body>
</html>