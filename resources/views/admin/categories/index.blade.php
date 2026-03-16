@extends('layout.admin')

@section('content')

<div class="page-header">
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}" class="btn-crear">➕ Crear Categoría</a>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td>#{{ str_pad($category->id, 3, '0', STR_PAD_LEFT) }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">

                    <a href="{{ route('categories.show', $category) }}" class="btn-volver"
                       style="margin-top:0;">
                        🔍 Ver
                    </a>

                    <a href="{{ route('categories.edit', $category) }}" class="btn-guardar">
                        ✏️ Editar
                    </a>

                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-destruir">
                            🗑️ Eliminar
                        </button>
                    </form>

                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="empty-row">No hay categorías registradas.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection