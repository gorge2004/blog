@extends('layouts.plantilla')
@section('title', 'cursos '.$curso->name)
@section('content')
	<h1>Bienvenido a la pagina del  curso {{ $curso->name }} </h1>
    <p>
        <strong>Categoria: </strong>{{$curso->category}}
    </p>
    <p>
        {{$curso->description}}
    </p>
@endsection


