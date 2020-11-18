@extends('layouts.plantilla')
@section('title', 'Editar cursos')
@section('content')
	<h1>AHora puedes editar curso</h1>
	<form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf
        @method('PUT')
		<label for="">
			Nombre:
			<br>
        <input type="text" name="name" value="{{$curso->name}}">
		</label>
		<br>

		<label for="">
			Descripcion:
			<br>
			<textarea name="description" rows="5" >{{$curso->description}}</textarea>
		</label>
		<br>
		<label for="">
			Categoria:
			<br>
			<input name="category" rows="5" value="{{$curso->category}}"></textarea>
		</label>
		<br>
		<button type="submit">
			Actualizar
		</button>
	</form>
@endsection

