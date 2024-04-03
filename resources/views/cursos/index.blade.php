@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
<div class="justify-center mt-4" >

    <h1 class="text-2xl font-semibold text-center mb-3">LISTADO DE CURSOS</h1>
   
</div>

<div class="relative overflow-x-auto mx-12 ">
    <div class="m-2">
        <a href="{{route('cursos.create')}}" class= "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg  float-right mb-2">NUEVO</a>
    </div>   
   
   
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                ID
                </th>
                <th scope="col" class="px-6 py-3">
                    NOMBRE
                </th>
                <th scope="col" class="px-6 py-3">
                    DESCRIPCION
                </th>
                <th scope="col" class="px-6 py-3">
                    CATEGORIA
                </th>
                <th scope="col" class="px-6 py-3" colspan="2">
                    ACCIONES
                </th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ( $cursos as $curso )
                            
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $curso->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $curso->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $curso->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $curso->category }}
                    </td>
                
                    <td class="px-6 py-4">
                        <a href="{{route('cursos.edit', $curso)}}">
                            <i class="fas fa-pencil-alt text-blue-500"></i>
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('cursos.show', $curso)}}">
                            <i class="fas fa-trash-alt text-red-500"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
    <div class="mt-4">
        {{ $cursos->links() }} 
    </div>
</div>



@endsection
