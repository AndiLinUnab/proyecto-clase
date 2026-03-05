@extends('layout.app')

@section('title', 'Listado de Productos')

@section('content')

<h1>Listado de Productos de PC</h1>

<a href="#" class="btn-crear">➕ Agregar Producto</a>

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
        @forelse ($misProductos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->name }}</td>
            <td>${{ number_format($producto->price, 0, ',', '.') }}</td>
            <td>{{ Str::limit($producto->description, 50) }}</td>
            <td>
                @if ($producto->image)
                    <img src="{{ asset('storage/'.$producto->image) }}" alt="">
                @else
                    <img src="https://images.icon-icons.com/2483/PNG/512/defect_analysis_icon_149951.png" alt="">
                @endif
            </td>
            <td>
                @if($producto->category)
                    {{ $producto->category->name }}
                @else
                    <span class="sin-categoria">Sin categoría</span>
                @endif
            </td>
            <td class="{{ $producto->is_active ? 'activo' : 'inactivo' }}">
                {{ $producto->is_active ? 'Activo' : 'Inactivo' }}
            </td>
            <td>
                <a href="#" class="btn-editar">✏️ Editar</a>
                <a href="#" class="btn-eliminar" onclick="return confirm('¿Eliminar producto?')">🗑️ Eliminar</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" style="text-align: center;">No hay productos registrados</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection