@extends('layout.admin')

@section('content')

<h1>Editar Categoría</h1>

<div class="form-container">
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre</label>
        <input
            type="text"
            name="name"
            value="{{ $category->name }}"
            placeholder="Nombre de la categoría"
            required
        >

        <label>Descripción</label>
        <textarea
            name="description"
            placeholder="Descripción de la categoría"
        >{{ $category->description }}</textarea>

        <button type="submit" class="btn-guardar">💾 Actualizar Categoría</button>

    </form>

    <a href="{{ route('categories.index') }}" class="btn-volver">← Volver al listado</a>
</div>

@endsection