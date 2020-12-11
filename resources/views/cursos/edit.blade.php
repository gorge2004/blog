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
        <input type="text" name="name" value="{{old('name',$curso->name)}}">
        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror
		</label>
		<br>

		<label for="">
			Descripcion:
			<br>
            <textarea name="description" rows="5" >{{old('description',$curso->description)}}</textarea>
            @error('description')
            <br>
                <small>*{{$message}}</small>
            <br>
            @enderror
		</label>
		<br>
		<label for="">
			Categoria:
			<br>
            <input name="category"  value="{{old('category',$curso->category)}}"/>
            @error('category')
            <br>
                <small>*{{$message}}</small>
            <br>
            @enderror
		</label>
		<br>
		<button type="submit">
			Actualizar
		</button>
	</form>
@endsection

