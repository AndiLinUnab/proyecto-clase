@extends('layout.admin')

@section('content')

<h1>Detalle de Categoría</h1>

<div class="product-detail">

    {{-- Ícono decorativo en lugar de imagen --}}
    <div class="product-image" style="display:flex; align-items:center; justify-content:center;">
        <div style="
            width:100%;
            aspect-ratio:1;
            background:#181b22;
            border:1px solid #1e2230;
            border-radius:12px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:5rem;
        ">🗂️</div>
    </div>

    {{-- Información --}}
    <div class="product-info">

        <h2>{{ $category->name }}</h2>

        <p>
            <strong>ID:</strong>
            #{{ str_pad($category->id, 3, '0', STR_PAD_LEFT) }}
        </p>

        <p>
            <strong>Nombre:</strong>
            {{ $category->name }}
        </p>

        @if($category->description)
        <p class="descripcion">{{ $category->description }}</p>
        @endif

        <div style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-top:0.5rem;">
            <a href="{{ route('categories.edit', $category) }}" class="btn-guardar">
                ✏️ Editar
            </a>
            <a href="{{ route('categories.index') }}" class="btn-volver" style="margin-top:0;">
                ← Volver al listado
            </a>
        </div>

    </div>

</div>

@endsection