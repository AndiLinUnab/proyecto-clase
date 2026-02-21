@extends('layout.app')

@section('title', 'Crear Producto')

@section('content')

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

    <a href="#" class="btn-volver">← Volver al listado</a>
</div>

@endsection