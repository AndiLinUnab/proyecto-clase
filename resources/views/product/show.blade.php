@extends('layout.app')
 
@section('title', 'Detalle del Producto')
 
@section('content')
 
<h1>Detalle del Producto</h1>
 
<div class="product-detail">
 
    {{-- Imagen --}}
    <div class="product-image">
        @if($producto->image)
            <img src="{{ asset('storage/' . $producto->image) }}" alt="{{ $producto->name }}">
        @else
            <div class="no-image">Sin imagen</div>
        @endif
    </div>
 
    {{-- Información --}}
    <div class="product-info">
 
        <h2>{{ $producto->name }}</h2>
 
        <p>
            <strong>ID:</strong>
            #{{ str_pad($producto->id, 3, '0', STR_PAD_LEFT) }}
        </p>
 
        <p>
            <strong>Precio:</strong>
            <span class="precio">${{ number_format($producto->price, 0, ',', '.') }}</span>
        </p>
 
        <p>
            <strong>Categoría:</strong>
            {{ $producto->category->name }}
        </p>
 
        <p>
            <strong>Estado:</strong>
            <span class="{{ $producto->estado === 'Activo' ? 'activo' : 'inactivo' }}">
                {{ $producto->estado }}
            </span>
        </p>
 
        <p class="descripcion">{{ $producto->description }}</p>
 
        <a href="{{ route('product.index') }}" class="btn-volver">← Volver al listado</a>
 
    </div>
 
</div>
 
@endsection