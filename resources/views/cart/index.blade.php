@extends('layout.app')

@section('title', 'Carrito de Compras')

@section('content')

<div class="page-header">
    <h1>Carrito de Compras 🛒</h1>
</div>

<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @forelse($items as $item)
        <tr>
            <td>{{ $item->product->name }}</td>
            <td style="color:#00e5ff; font-weight:600;">
                ${{ number_format($item->product->price, 0, ',', '.') }}
            </td>
            <td>
                <span style="
                    background:#181b22;
                    border:1px solid #1e2230;
                    border-radius:8px;
                    padding:0.2rem 0.75rem;
                    font-weight:600;
                ">{{ $item->quantity }}</span>
            </td>
            <td style="color:#00f0a0; font-weight:600;">
                ${{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
            </td>
            <td>
                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-destruir">🗑️ Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="empty-row">🛒 Tu carrito está vacío.</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{-- Total --}}
@if($items->count() > 0)
<div style="display:flex; justify-content:flex-end; margin-top:1.5rem;">
    <div style="
        background:#111318;
        border:1px solid #1e2230;
        border-radius:16px;
        padding:1.5rem 2rem;
        min-width:260px;
    ">
        <p style="color:#6b7591; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.1em; margin-bottom:0.5rem;">
            Total a pagar
        </p>
        <p style="font-family:'Syne',sans-serif; font-size:2rem; font-weight:800; color:#00e5ff; margin:0;">
            ${{ number_format($items->sum(fn($i) => $i->product->price * $i->quantity), 0, ',', '.') }}
        </p>
    </div>
</div>
@endif

<div style="margin-top:1.5rem;">
    <a href="{{ route('product.index') }}" class="btn-volver">← Seguir comprando</a>
</div>

@endsection