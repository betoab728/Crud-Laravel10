@extends('layouts.plantilla')
@section('title','cursos edit')

@section('content')
<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl mb-4">  Editar el curso </h1>
  <form action="{{route('cursos.update',$curso)}}" method="post">

        @csrf
        @method('put')
        <label  for="" class="block mb-2">
            Nombre: <br>
            <input class="border border-gray-300 px-4 py-2 w-full rounded-md focus:outline-none focus:border-blue-500" type="text" name="name" value="{{ old('name', $curso->name )}}">
        </label>

        @error('name')
        <br>
        <span> * {{$message}}</span>
        <br>
        @enderror

        <label for="" class="block mb-2">
            Desripcion: <br><textarea class="border border-gray-300 px-4 py-2 w-full rounded-md focus:outline-none focus:border-blue-500" name="description" id="" cols="30" rows="5">{{ old('description', $curso->description )}}</textarea>
        </label>

        @error('description')
        <br>
        <span> * {{$message}}</span>
        <br>
        @enderror

            <br>
        <label for="" class="block mb-2">
            Categoria: 
            <br><input class="border border-gray-300 px-4 py-2 w-full rounded-md focus:outline-none focus:border-blue-500" type="text" name="category" value="{{old('category', $curso->category )}}">
        </label>

        @error('category')
        <br>
        <span> * {{$message}}</span>
        <br>
        @enderror

        <br>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" type="submit">Actualizar</button>

    </form>
</div>

@endsection

