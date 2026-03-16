@extends('layout.admin')
 
@section('content')
 
<h1>Crear Categoría</h1>
 
<div class="form-container">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
 
        <label>Nombre</label>
        <input type="text" name="name" placeholder="Nombre de la categoría" required>
 
        <label>Descripción</label>
        <textarea name="description" placeholder="Descripción de la categoría"></textarea>
 
        <button type="submit" class="btn-guardar">💾 Guardar Categoría</button>
 
    </form>
 
    <a href="{{ route('categories.index') }}" class="btn-volver">← Volver al listado</a>
</div>
 
@endsection