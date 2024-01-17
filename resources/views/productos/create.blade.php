<!-- resources/views/productos/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>

<h2>Crear Nuevo Producto</h2>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" required></textarea>
    <br>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" step="0.01" required>
    <br>

    <label for="imagen">URL de la Imagen:</label>
    <input type="url" name="imagen" required>
    <br>

    <button type="submit">Crear Producto</button>
</form>

</body>
</html>
