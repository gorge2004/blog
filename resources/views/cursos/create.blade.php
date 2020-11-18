@extends('layouts.plantilla')
@section('title', 'Crear cursos')
@section('content')
	<h1>AHora puedes crear curso</h1>
	<form action="{{route('cursos.store')}}" method="post">
		@csrf
		<label for="">
			Nombre:
			<br>
			<input type="text" name="name">
		</label>
		<br>

		<label for="">
			Descripcion:
			<br>
			<textarea name="description" rows="5"></textarea>
		</label>
		<br>
		<label for="">
			Categoria:
			<br>
			<input name="category" rows="5"></textarea>
		</label>
		<br>
		<button type="submit">
			Enviar
		</button>
	</form>
@endsection

