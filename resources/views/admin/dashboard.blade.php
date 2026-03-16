@extends('layout.admin')
 
@section('content')
 
<h1>Dashboard</h1>
 
<p style="color:#6b7591; margin-bottom:2rem;">
    Bienvenido al panel de administración del Ecommerce.
</p>
 
<div class="dashboard-grid">
 
    <div class="dashboard-card">
        <div class="dashboard-card-icon">📦</div>
        <h3>Productos</h3>
        <p>Gestiona los productos del Ecommerce.</p>
        <a href="{{ route('product.index') }}" class="btn-crear">
            Ir a productos →
        </a>
    </div>
 
</div>
 
@endsection