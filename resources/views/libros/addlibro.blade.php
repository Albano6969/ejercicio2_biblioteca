@extends('app')

@section('title', "Agregar nuevos libros")
@section('titlebody', "Crear un nuevo libro")

@section('content')
<div class="bg-gray-100 mx-auto max-w-xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24 rounded-lg">
    <form action="{{ route('addBook')}}" method="POST" class="w-full max-w-sm ">
        @csrf
        
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Titulo:</label>
                </div>  
                <div class="md:w-2/3">  
                    <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="titulo">
                </div>
            </div>    
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Autor:</label>
                </div>  
                <div class="md:w-2/3">  
                    <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="autor">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Descripción del libro:</label>
                </div>  
                <div class="md:w-2/3">  
                    <textarea  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 h-40" name="descripcion"></textarea>
                </div>
            </div>  
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Año de Publicación:</label>
                </div>
                <div class="md:w-2/3">    
                    <input type="number" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="publicacion">
                </div>
            </div>    
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Genero:</label>
                </div>
                <div class="md:w-2/3">    
                    <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="genero">
                </div>
            </div>    
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Diponible:</label>
                </div>
                <div class="md:w-2/3">    
                    <select name="disponible" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="NO">No esta disponible</option>
                        <option value="SI" selected>Si esta disponible</option>
                    </select>
                </div>
            </div>
            <div class="md:flex md:items-center ">
                    
                <div class="md:w-6 mx-auto"> 
                    <input type="submit" class="shadow bg-blue-600 hover:bg-blue-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded border-none " value="Añadir Libro">   
                    
                </div>
            </div>
    </form>
</div>
@endsection
