
<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Lista de Vehículos') }}
</h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
<a href="{{ route('vehiculos.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-4">
Crear Nuevo Vehículo
</a>

@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
<span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<div class="overflow-x-auto">
<table class="min-w-full divide-y divide-gray-200">
<thead class="bg-gray-50">
<tr>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Marca</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modelo</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Año</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kilometraje</th>
<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
</tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200">
@foreach ($vehiculos as $vehiculo)
<tr>
<td class="px-6 py-4 whitespace-nowrap">{{ $vehiculo->id }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $vehiculo->marca }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $vehiculo->modelo }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $vehiculo->ano }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $vehiculo->color }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ number_format($vehiculo->precio, 2) }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $vehiculo->kilometraje }}</td>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
<!--<a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ver</a>-->
<a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
<form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" class="inline-block">
@csrf
@method('DELETE')
<button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $vehiculos->links() }}
</div>
</div>
</div>
</div>
</div>
</x-app-layout>
