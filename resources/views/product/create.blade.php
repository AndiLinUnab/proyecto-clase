@extends('layout.app')

@section('title', 'Crear Producto')

@section('content')

<h1>Crear Nuevo Producto</h1>

<div class="form-container">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <label>ID Producto</label>
        <input type="text" name="id" placeholder="Ingrese ID" value="{{ old('id') }}" required>

        <label>Nombre</label>
        <input type="text" name="name" placeholder="Nombre del producto" value="{{ old('name') }}" required>
        @error('name')
            <span style="color: red; font-size: 14px">
                {{ $message }}
            </span>
        @enderror

        <label>Precio</label>
        <input type="number" name="price" placeholder="Precio" step="0.01" value="{{ old('price') }}" required>
         @error('price')
            <span style="color: red; font-size: 14px">
                {{ $message }}
            </span>
        @enderror
        <label>Descripción</label>
        <textarea name="description" placeholder="Descripción del producto">{{ old('description') }}</textarea>
         @error('description')
            <span style="color: red; font-size: 14px">
                {{ $message }}
            </span>
        @enderror
        <label>Imagen</label>
        <input type="file" name="image" accept="image/*">
        @error('image')
            <span style="color: red; font-size: 14px">
                {{ $message }}
            </span>
        @enderror
        <label>Categoría</label>
        <select name="category_id" required>
            <option value="">Seleccione una categoría</option>  <!-- Opción por defecto -->
            @foreach ($categoryList as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn-guardar">Guardar Producto</button>
    </form>

    <a href="{{ route('product.index') }}" class="btn-volver">← Volver al listado</a>
</div>

@endsection