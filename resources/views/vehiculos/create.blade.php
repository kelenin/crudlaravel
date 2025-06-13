<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Crear Nuevo Vehiculo') }}
</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
<form action="{{ route('vehiculos.store') }}" method="POST">
@csrf

<div class="mb-4">
<label for="marca" class="block text-sm font-medium text-gray-700">Marca:</label>
<input type="text" name="marca" id="marca" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('marca')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="modelo" class="block text-sm font-medium text-gray-700">Modelo:</label>
<input type="text" name="modelo" id="modelo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('modelo')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="ano" class="block text-sm font-medium text-gray-700">Año:</label>
<input type="text" name="ano" id="ano" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('ano')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="color" class="block text-sm font-medium text-gray-700">Color:</label>
<input type="text" name="color" id="color" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('color')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="precio" class="block text-sm font-medium text-gray-700">Precio:</label>
<input type="number" name="precio" id="precio" step="0.01" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('precio')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="kilometraje" class="block text-sm font-medium text-gray-700">Kilometraje:</label>
<input type="number" name="kilometraje" id="kilometraje" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('kilometraje')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
Guardar
</button>
<a href="{{ route('vehiculos.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 ml-2">
Cancelar
</a>
</form>
</div>
</div>
</div>
</div>
</x-app-layout>



<!--@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Vehiculo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        

        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" required>    
        </div>

        <div>
            <label for="mdelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required>
        </div>

         <div>
            <label for="ano">Año:</label>
            <input type="text" name="ano" id="ano" required>
        </div>

        <div>
            <label for="color">Color:</label>
            <input type="text" name="color" id="color" required>
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" required>
        </div>
 
        <div>
            <label for="kilometraje">Kilometraje:</label>
            <input type="text" name="kilometraje" id="kilometraje" required>
        </div>

        <button type="submit">Guardar</button>
        <a href="{{ route('vehiculos.index') }}">Cancelar</a>
    </form>
@endsection-->