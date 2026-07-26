<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa Sitorajo')</title>
    <meta name="description" content="@yield('description', 'Informasi profil desa, pemerintahan, dan layanan masyarakat Desa Sitorajo.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        :root {
            --primary: #73835a;
            --primary-dark: #596645;
            --primary-light: #8f9e78;
            --accent: #e0b680;
            --accent-dark: #c89e68;
            --bg-light: #fdfdfd;
            --bg-white: #ffffff;
            --text-dark: #20241b;
            --text-muted: #6e7861;
            --border: #e6e8e3;
            --shadow: 0 4px 24px rgba(115,131,90,0.12);
            --shadow-lg: 0 8px 40px rgba(115,131,90,0.20);
            --radius: 12px;
            --radius-lg: 20px;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; color: var(--text-dark); background: var(--bg-white); }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            background: rgba(255,255,255,0.97);
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 20px rgba(26,107,58,0.08);
            transition: all 0.3s ease;
        }
        .navbar-inner {
            max-width: 1280px; margin: 0 auto;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 24px; height: 70px;
        }
        .navbar-brand {
            display: flex; align-items: center; gap: 12px;
        }
        .navbar-brand .logo-icon {
            width: 44px; height: 44px; background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 10px; display: flex; align-items: center; justify-content: center;
            color: white; font-size: 22px;
        }
        .navbar-brand .brand-text .name { font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height:1.2; }
        .navbar-brand .brand-text .sub { font-size: 11px; color: var(--text-muted); }
        .navbar-menu { display: flex; align-items: center; gap: 4px; list-style: none; }
        .navbar-menu > li { position: relative; }
        .navbar-menu > li > a, .nav-dropdown-trigger {
            display: flex; align-items: center; gap: 4px;
            padding: 8px 14px; border-radius: 8px;
            font-size: 14px; font-weight: 500; color: var(--text-dark);
            cursor: pointer; border: none; background: none;
            transition: all 0.2s ease;
        }
        .navbar-menu > li > a:hover, .nav-dropdown-trigger:hover,
        .navbar-menu > li > a.active { color: var(--primary); background: var(--bg-light); }
        .nav-dropdown { 
            position: absolute; top: calc(100% + 8px); left: 0;
            background: white; border-radius: var(--radius);
            box-shadow: var(--shadow-lg); border: 1px solid var(--border);
            min-width: 200px; padding: 8px; z-index: 100;
        }
        .nav-dropdown a {
            display: flex; align-items: center; gap: 10px;
            padding: 9px 14px; border-radius: 8px; font-size: 13.5px; font-weight: 500;
            color: var(--text-dark); transition: all 0.2s;
        }
        .nav-dropdown a:hover { background: var(--bg-light); color: var(--primary); }
        .nav-dropdown a i { width: 18px; color: var(--primary); }
        .navbar-cta {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white !important; padding: 9px 18px !important; border-radius: 8px !important;
            font-weight: 600 !important;
        }
        .navbar-cta:hover { opacity: 0.9; background: var(--primary-dark) !important; }
        .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 8px; }
        .hamburger span { display: block; width: 24px; height: 2px; background: var(--primary-dark); border-radius: 2px; transition: all 0.3s; }
        .mobile-menu {
            display: none; background: white; border-top: 1px solid var(--border);
            padding: 12px 24px 20px;
        }
        .mobile-menu a, .mobile-menu .m-group-title {
            display: block; padding: 10px 0; font-size: 14px; font-weight: 500;
            color: var(--text-dark); border-bottom: 1px solid #f0f0f0;
        }
        .mobile-menu .m-group-title { font-weight: 700; color: var(--primary); margin-top: 8px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; }
        .mobile-menu a { padding-left: 12px; }

        /* ===== FOOTER ===== */
        .footer {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: white; padding: 64px 0 0;
        }
        .footer-inner { max-width: 1280px; margin: 0 auto; padding: 0 24px; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; }
        .footer-brand .logo-wrap { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }
        .footer-brand .f-icon { width: 48px; height: 48px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; }
        .footer-brand h3 { font-size: 18px; font-weight: 700; }
        .footer-brand p { font-size: 13.5px; color: rgba(255,255,255,0.75); line-height: 1.8; margin-bottom: 20px; }
        .footer-socials { display: flex; gap: 10px; }
        .footer-socials a { width: 36px; height: 36px; background: rgba(255,255,255,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 15px; transition: all 0.2s; }
        .footer-socials a:hover { background: var(--accent); }
        .footer-col h4 { font-size: 14px; font-weight: 700; margin-bottom: 16px; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 8px; }
        .footer-col ul li a { font-size: 13.5px; color: rgba(255,255,255,0.75); transition: color 0.2s; display: flex; align-items: center; gap: 8px; }
        .footer-col ul li a:hover { color: white; }
        .footer-col ul li a i { font-size: 11px; }
        .footer-contact li { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 12px; font-size: 13.5px; color: rgba(255,255,255,0.8); }
        .footer-contact li i { color: var(--accent); margin-top: 3px; min-width: 14px; }
        .footer-bottom { margin-top: 48px; border-top: 1px solid rgba(255,255,255,0.15); padding: 20px 0; display: flex; justify-content: space-between; align-items: center; font-size: 13px; color: rgba(255,255,255,0.6); }

        /* ===== UTILITIES ===== */
        .container { max-width: 1280px; margin: 0 auto; padding: 0 24px; }
        .section { padding: 80px 0; }
        .section-header { text-align: center; margin-bottom: 56px; }
        .section-badge { display: inline-block; background: var(--bg-light); color: var(--primary); padding: 6px 16px; border-radius: 100px; font-size: 13px; font-weight: 600; border: 1px solid var(--border); margin-bottom: 14px; }
        .section-title { font-size: 36px; font-weight: 800; color: var(--text-dark); line-height: 1.2; margin-bottom: 14px; }
        .section-title span { color: var(--primary); }
        .section-sub { font-size: 16px; color: var(--text-muted); max-width: 580px; margin: 0 auto; line-height: 1.7; }
        .btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 10px; font-size: 14px; font-weight: 600; cursor: pointer; border: none; transition: all 0.2s; text-decoration: none; }
        .btn-primary { background: linear-gradient(135deg, var(--primary), var(--primary-light)); color: white; }
        .btn-primary:hover { opacity: 0.9; transform: translateY(-1px); box-shadow: 0 6px 20px rgba(26,107,58,0.3); }
        .btn-outline { background: transparent; color: var(--primary); border: 2px solid var(--primary); }
        .btn-outline:hover { background: var(--primary); color: white; }
        .btn-accent { background: linear-gradient(135deg, var(--accent), var(--accent-dark)); color: white; }
        .btn-accent:hover { opacity: 0.9; transform: translateY(-1px); }
        .card { background: white; border-radius: var(--radius); box-shadow: var(--shadow); border: 1px solid var(--border); overflow: hidden; transition: all 0.3s ease; }
        .card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
        .page-hero { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 60%, var(--primary-light) 100%); color: white; padding: 120px 0 60px; text-align: center; }
        .page-hero h1 { font-size: 42px; font-weight: 800; margin-bottom: 12px; }
        .page-hero p { font-size: 16px; color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 20px; }
        .breadcrumb { display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); }
        .breadcrumb a { color: var(--accent); }
        .breadcrumb i { font-size: 10px; }
        .alert-success { background: #d1fae5; border: 1px solid #6ee7b7; color: #065f46; padding: 14px 18px; border-radius: 10px; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }
        .alert-error { background: #fee2e2; border: 1px solid #fca5a5; color: #991b1b; padding: 14px 18px; border-radius: 10px; margin-bottom: 20px; }
        .main-content { padding-top: 70px; }

        @media (max-width: 1024px) {
            .navbar-menu { display: none; }
            .hamburger { display: flex; }
            .mobile-menu.open { display: block; }
            .footer-grid { grid-template-columns: 1fr 1fr; gap: 32px; }
        }
        @media (max-width: 640px) {
            .section { padding: 56px 0; }
            .section-title { font-size: 28px; }
            .page-hero h1 { font-size: 28px; }
            .footer-grid { grid-template-columns: 1fr; gap: 24px; }
            .footer-bottom { flex-direction: column; gap: 8px; text-align: center; }
        }

        @yield('extra-css')
    </style>
    @yield('head')
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" x-data="{ mobileOpen: false }">
    <div class="navbar-inner">
        <a href="{{ route('beranda') }}" class="navbar-brand">
            <div class="logo-icon"><i class="fas fa-leaf"></i></div>
            <div class="brand-text">
                <div class="name">Desa Sitorajo</div>
            </div>
        </a>

        <ul class="navbar-menu">
            <li><a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>

            <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                <button class="nav-dropdown-trigger">Profil Desa <i class="fas fa-chevron-down" style="font-size:10px"></i></button>
                <div class="nav-dropdown" x-show="open" x-transition style="display:none;">
                    <a href="{{ route('profil') }}"><i class="fas fa-landmark"></i>Profil Desa</a>
                    <a href="{{ route('sejarah') }}"><i class="fas fa-scroll"></i>Sejarah Desa</a>
                    <a href="{{ route('kebudayaan') }}"><i class="fas fa-masks-theater"></i>Kebudayaan</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                <button class="nav-dropdown-trigger">Pemerintahan <i class="fas fa-chevron-down" style="font-size:10px"></i></button>
                <div class="nav-dropdown" x-show="open" x-transition style="display:none;">
                    <a href="{{ route('struktur') }}"><i class="fas fa-sitemap"></i>Struktur Organisasi</a>
                    <a href="{{ route('perangkat') }}"><i class="fas fa-users"></i>Perangkat Desa</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                <button class="nav-dropdown-trigger">Kependudukan <i class="fas fa-chevron-down" style="font-size:10px"></i></button>
                <div class="nav-dropdown" x-show="open" x-transition style="display:none;">
                    <a href="{{ route('data-penduduk') }}"><i class="fas fa-chart-pie"></i>Data Penduduk</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                <button class="nav-dropdown-trigger">Galeri <i class="fas fa-chevron-down" style="font-size:10px"></i></button>
                <div class="nav-dropdown" x-show="open" x-transition style="display:none;">
                    <a href="{{ route('galeri-foto') }}"><i class="fas fa-images"></i>Galeri Foto</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                <button class="nav-dropdown-trigger">Informasi <i class="fas fa-chevron-down" style="font-size:10px"></i></button>
                <div class="nav-dropdown" x-show="open" x-transition style="display:none;">
                    <a href="{{ route('kontak') }}"><i class="fas fa-envelope"></i>Kontak</a>
                    <a href="{{ route('peta') }}"><i class="fas fa-map-location-dot"></i>Peta Lokasi</a>
                </div>
            </li>
        </ul>

        <button class="hamburger" @click="mobileOpen = !mobileOpen" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" :class="{ 'open': mobileOpen }">
        <a href="{{ route('beranda') }}"><i class="fas fa-home"></i> Beranda</a>
        <div class="m-group-title">Profil Desa</div>
        <a href="{{ route('profil') }}">Profil Desa</a>
        <a href="{{ route('sejarah') }}">Sejarah Desa</a>
        <a href="{{ route('kebudayaan') }}">Kebudayaan</a>
        <div class="m-group-title">Pemerintahan</div>
        <a href="{{ route('struktur') }}">Struktur Organisasi</a>
        <a href="{{ route('perangkat') }}">Perangkat Desa</a>
        <div class="m-group-title">Kependudukan</div>
        <a href="{{ route('data-penduduk') }}">Data Penduduk</a>
        <div class="m-group-title">Galeri & Informasi</div>
        <a href="{{ route('galeri-foto') }}">Galeri Foto</a>
        <a href="{{ route('kontak') }}">Kontak</a>
        <a href="{{ route('peta') }}">Peta Lokasi</a>
    </div>
</nav>

<div class="main-content">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="logo-wrap">
                    <div class="f-icon"><i class="fas fa-leaf"></i></div>
                    <div>
                        <h3>Desa Sitorajo</h3>
                        <div style="font-size:12px;color:rgba(255,255,255,0.6)">Kuantan Tengah</div>
                    </div>
                </div>
                <p>Kami berkomitmen untuk memberikan informasi yang transparan dan pelayanan terbaik kepada seluruh masyarakat Desa Sitorajo.</p>
            </div>

            <div class="footer-col">
                <h4>Profil Desa</h4>
                <ul>
                    <li><a href="{{ route('profil') }}"><i class="fas fa-chevron-right"></i>Profil Desa</a></li>
                    <li><a href="{{ route('sejarah') }}"><i class="fas fa-chevron-right"></i>Sejarah Desa</a></li>
                    <li><a href="{{ route('kebudayaan') }}"><i class="fas fa-chevron-right"></i>Kebudayaan</a></li>
                    <li><a href="{{ route('struktur') }}"><i class="fas fa-chevron-right"></i>Struktur Org.</a></li>
                    <li><a href="{{ route('perangkat') }}"><i class="fas fa-chevron-right"></i>Perangkat Desa</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Layanan</h4>
                <ul>
                    <li><a href="{{ route('data-penduduk') }}"><i class="fas fa-chevron-right"></i>Data Penduduk</a></li>
                    <li><a href="{{ route('galeri-foto') }}"><i class="fas fa-chevron-right"></i>Galeri Foto</a></li>
                    <li><a href="{{ route('peta') }}"><i class="fas fa-chevron-right"></i>Peta Lokasi</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Kontak</h4>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> Jalan Madrasah Sitorajo Kari</li>
                    <li><i class="fas fa-phone"></i> 082284297921</li>
                    <li><i class="fas fa-envelope"></i> sitorajokari@gmail.com</li>
                    <li><i class="fas fa-clock"></i> Senin–Jumat: 08.00–16.00 WIB</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>© {{ date('Y') }} Desa Sitorajo. Hak Cipta Dilindungi.</span>
        </div>
    </div>
</footer>

@yield('scripts')
</body>
</html>
