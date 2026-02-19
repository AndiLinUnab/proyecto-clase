<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>

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

        .form-container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        .btn-guardar {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-guardar:hover {
            background-color: #27ae60;
        }

        .btn-volver {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #3498db;
        }

        .btn-volver:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Crear Nuevo Producto</h1>

<div class="form-container">
    <form>
        <label>ID Producto</label>
        <input type="text" placeholder="Ingrese ID">

        <label>Nombre</label>
        <input type="text" placeholder="Nombre del producto">

        <label>Precio</label>
        <input type="number" placeholder="Precio">

        <label>Descripción</label>
        <textarea placeholder="Descripción del producto"></textarea>

        <label>Imagen</label>
        <input type="file">

        <label>Estado</label>
        <select>
            <option>Activo</option>
            <option>Inactivo</option>
        </select>

        <button type="submit" class="btn-guardar">Guardar Producto</button>
    </form>

    <a href="index.blade.php" class="btn-volver">← Volver al listado</a>
</div>

</body>
</html>


