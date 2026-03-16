@extends('layout.app')

@section('title', 'Listado de Productos')

@section('content')

<div class="page-header">
    <h1>Listado de Productos de PC</h1>
    <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
        <a href="{{ route('product.create') }}" class="btn-crear">➕ Agregar Producto</a>
        <a href="{{ route('cart.index') }}" class="btn-crear">🛒 Ver Carrito</a>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $producto)
        <tr>
            <td>#{{ str_pad($producto->id, 3, '0', STR_PAD_LEFT) }}</td>
            <td>{{ $producto->name }}</td>
            <td>${{ number_format($producto->price, 0, ',', '.') }}</td>
            <td>{{ Str::limit($producto->description, 50) }}</td>
            <td>
                @if($producto->image)
                    <img src="{{ asset('storage/'.$producto->image) }}" alt="{{ $producto->name }}">
                @else
                    <img src="https://images.icon-icons.com/2483/PNG/512/defect_analysis_icon_149951.png" alt="Sin imagen">
                @endif
            </td>
            <td>
                @if($producto->category)
                    {{ $producto->category->name }}
                @else
                    <span class="inactivo">Sin categoría</span>
                @endif
            </td>
            <td>
                <span class="{{ $producto->is_active ? 'activo' : 'inactivo' }}">
                    {{ $producto->is_active ? 'Activo' : 'Inactivo' }}
                </span>
            </td>
            <td>
                <div style="display:flex; flex-direction:column; gap:0.5rem;">

                    <a href="{{ route('product.show', $producto) }}" class="btn-volver"
                       style="margin-top:0;">
                        🔍 Seleccionar
                    </a>

                    <form action="{{ route('product.destroy', $producto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-destruir">🗑️ Destruir</button>
                    </form>

                    <form action="{{ route('cart.add', $producto->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-guardar">🛒 Agregar al carrito</button>
                    </form>

                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" class="empty-row">No hay productos registrados.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection