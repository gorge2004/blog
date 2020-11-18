@extends('layouts.plantilla')
@section('title', 'cursos '.$curso->name)
@section('content')
    <h1>Bienvenido a la pagina del  curso {{ $curso->name }} </h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso )}}">Editar Curso</a>

	<p>
		<strong>Categoria: </strong>{{$curso->category}}
	</p>
	<p>
		{{$curso->description}}
	</p>
@endsection


