@extends('layouts.plantilla')

@section('title', 'Curso'. $curso->name)

@section('content')

<form action="{{route('cursos.destroy',$curso)}}" method="post">
    @csrf
    @method('delete')

        <h1 class="text-3xl text-red-500">Detalles del curso</h1>

        <h1 class="text-3xl text-red-500">{{ $curso->name }}</h1>

        <p>Descripcion:  {{ $curso->description }}</p>

        <p>Categoria: {{ $curso->category }}</p>

        <br>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" type="submit">Eliminar</button>


        <a href="{{route('cursos.index')}}">Volver</a>

</form>
@endsection