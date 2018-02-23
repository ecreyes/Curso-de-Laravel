@extends('layout')

@section('contenido')
<h1>Index</h1>

<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Mensaje</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($datos as $dato)
			<tr>
				<td>{{$dato->id}}</td>
				<td>
					<a href="{{route('mensajes.show',$dato->id)}}">
						{{$dato->nombre}}
					</a>
				</td>
				<td>{{$dato->email}}</td>
				<td>{{$dato->mensaje}}</td>
				<td>
					<a href="{{route('mensajes.edit',$dato->id)}}">
						Editar
					</a>
					<form method="POST" action="{{route('mensajes.destroy',$dato->id)}}">
						{{csrf_field()}}
						{!!method_field('DELETE')!!}
						<button type="submit">Eliminar</button>
					</form>
				</td>				
			</tr>
		@endforeach
	</tbody>
</table>

@stop