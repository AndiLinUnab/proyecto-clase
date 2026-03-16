<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin — TechMarket</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- CSS del Marketplace -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>

        /* ── Layout admin ───────────────────────────────────── */
        body {
            display: flex;
            min-height: 100vh;
        }

        /* ── Sidebar ────────────────────────────────────────── */
        .sidebar {
            width: 230px;
            min-height: 100vh;
            background: #111318;
            border-right: 1px solid #1e2230;
            padding: 2rem 1.2rem;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            z-index: 100;
        }

        .sidebar-brand {
            font-family: 'Syne', sans-serif;
            font-size: 1.2rem;
            font-weight: 800;
            color: #00e5ff;
            letter-spacing: 0.06em;
            text-decoration: none;
            margin-bottom: 1.5rem;
            display: block;
        }

        .sidebar-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #3a3f55;
            padding: 0 0.6rem;
            margin: 1rem 0 0.4rem;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            color: #6b7591;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.55rem 0.8rem;
            border-radius: 10px;
            border: 1px solid transparent;
            transition: 0.22s cubic-bezier(0.4,0,0.2,1);
        }

        .sidebar a:hover,
        .sidebar a.active {
            color: #00e5ff;
            background: rgba(0,229,255,0.06);
            border-color: rgba(0,229,255,0.15);
        }

        .sidebar-footer {
            margin-top: auto;
            padding-top: 1.5rem;
            border-top: 1px solid #1e2230;
            font-size: 0.75rem;
            color: #3a3f55;
            text-align: center;
        }

        /* ── Contenido principal ────────────────────────────── */
        .admin-content {
            margin-left: 230px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #0a0c10;
            background-image: radial-gradient(
                ellipse 80% 40% at 60% -10%,
                rgba(0,229,255,0.05) 0%,
                transparent 70%
            );
        }

        /* ── Topbar ─────────────────────────────────────────── */
        .topbar {
            height: 62px;
            background: rgba(10,12,16,0.88);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid #1e2230;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 90;
        }

        .topbar-title {
            font-family: 'Syne', sans-serif;
            font-size: 0.9rem;
            font-weight: 700;
            color: #e8ecf4;
            letter-spacing: 0.04em;
        }

        .topbar-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(0,229,255,0.08);
            border: 1px solid rgba(0,229,255,0.2);
            color: #00e5ff;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
        }

        .topbar-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #00e5ff;
            box-shadow: 0 0 6px #00e5ff;
            animation: pulse 2s infinite;
        }

        /* ── Área de contenido ──────────────────────────────── */
        .page-wrapper {
            padding: 2.5rem 2rem;
            flex: 1;
        }

        /* ── Animaciones ─────────────────────────────────────── */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.35; }
        }

        /* ── Responsive ─────────────────────────────────────── */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: relative;
                flex-direction: row;
                flex-wrap: wrap;
                padding: 1rem;
                gap: 0.5rem;
            }

            .sidebar-brand { margin-bottom: 0; width: 100%; }
            .sidebar-label { display: none; }

            .admin-content { margin-left: 0; }

            .page-wrapper { padding: 1.5rem 1rem; }
        }

    </style>

</head>
<body>

    {{-- ── Sidebar ─────────────────────────────────────────── --}}
    <aside class="sidebar">

        <a href="/" class="sidebar-brand">⚡ TECHMARKET</a>

        <span class="sidebar-label">Menú</span>

        <a href="{{ route('admin.dashboard') }}">
            🏠 Dashboard
        </a>
        <a href="{{ route('product.index') }}">
            📦 Productos
        </a>
        <a href="/">
            🌐 Landing
        </a>

        <div class="sidebar-footer">
            © {{ date('Y') }} TechMarket
        </div>

    </aside>

    {{-- ── Contenido ────────────────────────────────────────── --}}
    <div class="admin-content">

        {{-- Topbar --}}
        <div class="topbar">
            <span class="topbar-title">Panel de Administración</span>
            <span class="topbar-badge">Admin</span>
        </div>

        {{-- Vistas hijas --}}
        <div class="page-wrapper">
            @yield('content')
        </div>

    </div>

</body>
</html>