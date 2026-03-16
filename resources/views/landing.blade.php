<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechMarket — Ecommerce</title>
 
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
 
    <!-- CSS del Marketplace -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 
    <style>
 
        /* ── Hero ───────────────────────────────────────────── */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: calc(100vh - 62px);
            padding: 4rem 1.5rem;
            position: relative;
            overflow: hidden;
        }
 
        /* Círculo de luz de fondo */
        .hero::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(0,229,255,0.07) 0%, transparent 70%);
            pointer-events: none;
        }
 
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(0,229,255,0.08);
            border: 1px solid rgba(0,229,255,0.2);
            color: #00e5ff;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.35rem 1rem;
            border-radius: 999px;
            margin-bottom: 2rem;
            animation: fadeUp 0.4s ease both;
        }
 
        .hero-badge::before {
            content: '';
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #00e5ff;
            box-shadow: 0 0 6px #00e5ff;
            animation: pulse 2s infinite;
        }
 
        .hero h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(2.8rem, 7vw, 5rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.05;
            color: #e8ecf4;
            margin-bottom: 1.5rem;
            animation: fadeUp 0.45s ease both;
            animation-delay: 0.05s;
        }
 
        /* Quita el subrayado del h1 del layout en el hero */
        .hero h1::after { display: none; }
 
        .hero h1 span {
            color: #00e5ff;
        }
 
        .hero p {
            max-width: 500px;
            font-size: 1.1rem;
            color: #6b7591;
            font-weight: 400;
            line-height: 1.75;
            margin-bottom: 2.5rem;
            animation: fadeUp 0.45s ease both;
            animation-delay: 0.1s;
        }
 
        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
            animation: fadeUp 0.45s ease both;
            animation-delay: 0.15s;
        }
 
        .btn-hero {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.85rem 2rem;
            border-radius: 12px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: 0.22s cubic-bezier(0.4,0,0.2,1);
            cursor: pointer;
        }
 
        .btn-hero-primary {
            background: #00e5ff;
            color: #000;
            box-shadow: 0 0 28px rgba(0,229,255,0.3);
        }
 
        .btn-hero-primary:hover {
            background: #fff;
            box-shadow: 0 0 40px rgba(0,229,255,0.4);
            transform: translateY(-3px);
        }
 
        .btn-hero-secondary {
            background: transparent;
            color: #6b7591;
            border: 1px solid #1e2230;
        }
 
        .btn-hero-secondary:hover {
            color: #00e5ff;
            border-color: #00e5ff;
            background: rgba(0,229,255,0.06);
            transform: translateY(-3px);
        }
 
        /* ── Features ───────────────────────────────────────── */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1.5rem 5rem;
            animation: fadeUp 0.5s ease both;
            animation-delay: 0.2s;
        }
 
        .feature-card {
            background: #111318;
            border: 1px solid #1e2230;
            border-radius: 16px;
            padding: 1.8rem 1.5rem;
            text-align: left;
            transition: 0.22s cubic-bezier(0.4,0,0.2,1);
        }
 
        .feature-card:hover {
            border-color: rgba(0,229,255,0.3);
            box-shadow: 0 8px 32px rgba(0,229,255,0.06);
            transform: translateY(-4px);
        }
 
        .feature-icon {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
 
        .feature-card h3 {
            font-family: 'Syne', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: #e8ecf4;
            margin-bottom: 0.5rem;
        }
 
        .feature-card p {
            font-size: 0.85rem;
            color: #6b7591;
            line-height: 1.6;
        }
 
        /* ── Animaciones ─────────────────────────────────────── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(18px); }
            to   { opacity: 1; transform: translateY(0); }
        }
 
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.4; }
        }
 
        @media (max-width: 600px) {
            .hero h1 { font-size: 2.4rem; }
            .btn-hero { padding: 0.75rem 1.5rem; font-size: 0.9rem; }
        }
 
    </style>
 
</head>
<body>
 
    {{-- Navbar --}}
    @include('layout.navbar')
 
    {{-- Hero --}}
    <section class="hero">
 
        <div class="hero-badge">Nuevo stock disponible</div>
 
        <h1>Tu tienda de<br><span>componentes PC</span></h1>
 
        <p>
            Descubre nuestros productos al mejor precio.
            Hardware de alto rendimiento para gaming, diseño y trabajo profesional.
        </p>
 
        <div class="hero-buttons">
            <a href="{{ route('product.index') }}" class="btn-hero btn-hero-primary">
                ⚡ Ver Productos
            </a>
            <a href="#features" class="btn-hero btn-hero-secondary">
                Conocer más →
            </a>
        </div>
 
    </section>
 
    {{-- Features --}}
    <div class="features" id="features">
 
        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h3>Alto Rendimiento</h3>
            <p>Componentes seleccionados para máximo desempeño en gaming y trabajo.</p>
        </div>
 
        <div class="feature-card">
            <div class="feature-icon">🛡️</div>
            <h3>Garantía Incluida</h3>
            <p>Todos nuestros productos cuentan con garantía oficial del fabricante.</p>
        </div>
 
        <div class="feature-card">
            <div class="feature-icon">💳</div>
            <h3>Mejores Precios</h3>
            <p>Precios competitivos y opciones de financiamiento para tu comodidad.</p>
        </div>
 
        <div class="feature-card">
            <div class="feature-icon">📦</div>
            <h3>Envío Rápido</h3>
            <p>Despacho a todo el país en 24 a 48 horas hábiles.</p>
        </div>
 
    </div>
 
    {{-- Footer --}}
    @include('layout.footer')
 
</body>
</html>