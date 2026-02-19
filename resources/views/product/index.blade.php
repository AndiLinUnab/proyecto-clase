<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos PC</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Listado de Productos de PC</h1>

<a href="create.blade.php" class="btn-crear">➕ Agregar Producto</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>001</td>
            <td>Tarjeta Gráfica RTX 4060</td>
            <td>$1,800,000</td>
            <td>GPU 8GB GDDR6 alto rendimiento</td>
            <td><img src="https://via.placeholder.com/80" alt="RTX 4060"></td>
            <td class="activo">Activo</td>
        </tr>

        <tr>
            <td>002</td>
            <td>Procesador Intel i7 12700K</td>
            <td>$1,500,000</td>
            <td>12 núcleos alto rendimiento gaming</td>
            <td><img src="https://via.placeholder.com/80" alt="Intel i7"></td>
            <td class="activo">Activo</td>
        </tr>

        <tr>
            <td>003</td>
            <td>Memoria RAM 16GB DDR4</td>
            <td>$350,000</td>
            <td>3200MHz alto rendimiento</td>
            <td><img src="https://via.placeholder.com/80" alt="RAM"></td>
            <td class="inactivo">Inactivo</td>
        </tr>

        <tr>
            <td>004</td>
            <td>SSD 1TB NVMe</td>
            <td>$420,000</td>
            <td>Alta velocidad de lectura y escritura</td>
            <td><img src="https://via.placeholder.com/80" alt="SSD"></td>
            <td class="activo">Activo</td>
        </tr>
    </tbody>
</table>

</body>
</html>


