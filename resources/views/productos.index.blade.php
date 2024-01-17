<!-- resources/views/productos/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
</head>
<body>

@foreach ($productos as $producto)
    <div style="border: 1px solid #ccc; padding: 10px; margin: 10px; width: 300px; float: left;">
        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" style="width: 100%;">
        <h3>{{ $producto->nombre }}</h3>
        <p>{{ $producto->descripcion }}</p>
        <p>Precio: ${{ $producto->precio }}</p>
    </div>
@endforeach

</body>
</html>
