<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi sitio</title>
</head>
<body>

<a href="{{route('home')}}">Inicio</a>
<a href="{{route('saludo')}}">Saludo</a>
<a href="{{route('contacto')}}">Contacto</a>
@yield('contenido')

	
</body>
</html>