@extends('layouts.plantilla')
@section('title', 'Crear cursos')
@section('content')
	<h1>AHora puedes crear curso</h1>
	<form action="{{route('cursos.store')}}" method="post">
		@csrf
		<label for="">
			Nombre:
			<br>
        <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="description" rows="5">{{old('description')}}</textarea>
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
            <input name="category" value="{{old('category')}}" />
            @error('category')
            <br>
                <small>*{{$message}}</small>
            <br>
            @enderror
		</label>
		<br>
		<button type="submit">
			Enviar
		</button>
	</form>
@endsection

