<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use Illuminate\Http\Request;

class CompradorController extends Controller
{
    /**
     * Mostrar todos los compradores.
     */
    public function index()
    {
        $compradores = Comprador::orderBy('id', 'desc')->get();

        return view('compradores.index', compact('compradores'));
    }

    /**
     * Mostrar formulario para registrar un comprador.
     */
    public function create()
    {
        return view('compradores.create');
    }

    /**
     * Guardar un nuevo comprador.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'correo' => 'nullable|email|max:150',
            'auto_comprado' => 'required|string|max:100',
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'anio' => 'required|integer|min:1900|max:2100',
            'precio' => 'required|numeric|min:0',
            'fecha_compra' => 'required|date',
        ]);

        Comprador::create($request->all());

        return redirect()
            ->route('compradores.index')
            ->with('success', 'Comprador registrado correctamente.');
    }

    /**
     * Mostrar un comprador específico.
     */
    public function show(Comprador $comprador)
    {
        return view('compradores.show', compact('comprador'));
    }

    /**
     * Mostrar formulario para editar un comprador.
     */
    public function edit(Comprador $comprador)
    {
        return view('compradores.edit', compact('comprador'));
    }

    /**
     * Actualizar un comprador.
     */
    public function update(Request $request, Comprador $comprador)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'correo' => 'nullable|email|max:150',
            'auto_comprado' => 'required|string|max:100',
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'anio' => 'required|integer|min:1900|max:2100',
            'precio' => 'required|numeric|min:0',
            'fecha_compra' => 'required|date',
        ]);

        $comprador->update($request->all());

        return redirect()
            ->route('compradores.index')
            ->with('success', 'Comprador actualizado correctamente.');
    }

    /**
     * Eliminar un comprador.
     */
    public function destroy(Comprador $comprador)
    {
        $comprador->delete();

        return redirect()
            ->route('compradores.index')
            ->with('success', 'Comprador eliminado correctamente.');
    }
}