<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /** constructor para proteger las rutas del controlador
     * con middleware de autenticacion */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    // Muestra la lista de vehiculos
    public function index()
    {
        $vehiculos = Vehiculos::latest()->paginate(5);
        return view('vehiculos.index', compact('vehiculos'));
    }

    // Muestra el formulario para crear un nuevo vehiculo
    public function create()
    {
        return view('vehiculos.create');
    }

    // Almacena el nuevo vehiculo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo'  => 'required',
            'ano' => 'required',
            'color'  => 'required',
            'precio' => 'required',
            'kilometraje'  => 'required',
        ]);

        vehiculos::create($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'Vehiculos creado exitosamente.');
    }

    // Muestra un vehiculo en particular
    public function show(vehiculos $vehiculos)
    {
        return view('vehiculos.show', compact('vehiculos'));
    }

    // Muestra el formulario para editar un vehiculo
    public function edit(vehiculos $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    // Actualiza el vehiculo en la base de datos
    public function update(Request $request, vehiculos $vehiculo)
    {
        $request->validate([
            'marca' => 'required',
            'modelo'  => 'required',
            'ano' => 'required',
            'color'  => 'required',
            'precio' => 'required',
            'kilometraje'  => 'required',
        ]);

        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'Vehiculos actualizado.');
    }

    // Elimina el vehiculo de la base de datos
    public function destroy(Vehiculos $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehiculo eliminado.');
    }
}