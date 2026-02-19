<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos PC</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .btn-crear {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn-crear:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            width: 80px;
            border-radius: 5px;
        }

        .activo {
            color: green;
            font-weight: bold;
        }

        .inactivo {
            color: red;
            font-weight: bold;
        }
    </style>
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
            <td><img src="https://via.placeholder.

