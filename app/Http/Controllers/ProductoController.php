<?php

// app/Http/Controllers/ProductoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Añade esta línea para importar la clase Request
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'precio' => 'required|numeric',
        ]);

        $imagenNombre = $request->file('imagen')->store('productos', 'public');

        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenNombre,
            'precio' => $request->precio,
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }
}



