<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Editar Vehiculo') }}
</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
<form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
@csrf
@method('PUT') {{-- Importante para las solicitudes PUT --}}

<div class="mb-4">
<label for="marca" class="block text-sm font-medium text-gray-700">Marca:</label>
<input type="text" name="marca" id="marca" value="{{ old('marca', $vehiculo->marca) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('marca')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="modelo" class="block text-sm font-medium text-gray-700">Modelo:</label>
<input type="text" name="modelo" id="modelo" value="{{ old('modelo', $vehiculo->modelo) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('modelo')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="ano" class="block text-sm font-medium text-gray-700">Año:</label>
<input type="text" name="ano" id="ano" value="{{ old('ano', $vehiculo->ano) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('ano')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="color" class="block text-sm font-medium text-gray-700">Color:</label>
<input type="text" name="color" id="color" value="{{ old('color', $vehiculo->color) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('color')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="precio" class="block text-sm font-medium text-gray-700">Precio:</label>
<input type="number" name="precio" id="precio" step="0.01" value="{{ old('precio', $vehiculo->precio) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('precio')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="kilometraje" class="block text-sm font-medium text-gray-700">Kilometraje:</label>
<input type="number" name="kilometraje" id="kilometraje" value="{{ old('kilometraje', $vehiculo->kilometraje) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
@error('kilometraje')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
Actualizar Producto
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

