@extends('layouts.plantilla')
@section('title','Crear Curso')

@section('content')
    <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl mb-4">Crear un nuevo curso</h1>
        <form action="{{ route('cursos.store') }}" method="post">

            @csrf

            <div class="mb-4">
                <label class="block mb-2" for="name">Nombre:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded-md focus:outline-none focus:border-blue-500" type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label class="block mb-2" for="descripcion">Descripción:</label>
                <textarea class="border border-gray-300 px-4 py-2 w-full rounded-md focus:outline-none focus:border-blue-500" name="description" id="description" cols="30" rows="5">{{ old('descripcion') }}</textarea>
                @error('description')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="categoria">Categoría:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded-md focus:outline-none focus:border-blue-500" type="text" name="category" id="category" value="{{ old('categoria') }}">
                @error('category')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Guardar</button>
                <a href="{{ route('cursos.index') }}" class="text-gray-600 hover:text-gray-800 px-4 py-2">Volver</a>
            </div>

        </form>
    </div>
@endsection

