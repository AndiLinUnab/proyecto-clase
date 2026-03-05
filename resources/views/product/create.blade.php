@extends('layout.app')

@section('title', 'Crear Producto')

@section('content')

<h1>Crear Nuevo Producto</h1>

<div class="form-container">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <label>ID Producto</label>
        <input type="text" name="id" placeholder="Ingrese ID" value="{{ old('id') }}">

        <label>Nombre</label>
        <input type="text" name="name" placeholder="Nombre del producto" value="{{ old('name') }}">

        <label>Precio</label>
        <input type="number" name="price" placeholder="Precio" step="0.01" value="{{ old('price') }}">

        <label>Descripción</label>
        <textarea name="description" placeholder="Descripción del producto">{{ old('description') }}</textarea>

        <label>Imagen</label>
        <input type="file" name="image" accept="image/*">

        <label>Categoría</label>
        <select>
            @foreach ($categoryList as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn-guardar">Guardar Producto</button>
    </form>

    <a href="#" class="btn-volver">← Volver al listado</a>
</div>

@endsection