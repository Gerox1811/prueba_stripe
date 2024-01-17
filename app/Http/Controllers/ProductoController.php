<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de tener la ruta correcta al modelo Producto

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $producto = new Producto();
        return view('productos.create', compact('producto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'imagen' => 'required|url', // Asumiendo que el campo imagen es un enlace URL
        ]);

        $producto = Producto::create($request->all());

        return redirect()->route('index')
            ->with('success', 'Producto creado exitosamente.');
    }
}
