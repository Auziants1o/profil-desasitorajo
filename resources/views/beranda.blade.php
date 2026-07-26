@extends('layouts.app')
@section('title', 'Beranda')

@section('head')
<style>
/* ===== HERO ===== */
.hero {
    min-height: 90vh;
    display: flex;
    align-items: center;
    background: var(--primary-dark);
    position: relative;
    overflow: hidden;
}
.hero-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
    opacity: 0.35;
}
/* Overlay gradient bawah agar menyatu ke stats-row */
.hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 200px;
    z-index: 1;
    background: linear-gradient(to bottom, transparent, var(--bg-light));
}
.hero-pattern {
    position: absolute; inset: 0;
    background-image:
        radial-gradient(circle at 15% 60%, rgba(224,182,128,0.12) 0%, transparent 50%),
        radial-gradient(circle at 85% 20%, rgba(255,255,255,0.04) 0%, transparent 40%);
}
.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
    padding: 120px 24px 160px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(224,182,128,0.18);
    border: 1px solid rgba(224,182,128,0.4);
    color: var(--accent);
    padding: 7px 18px; border-radius: 100px;
    font-size: 13px; font-weight: 600; margin-bottom: 24px;
}
.hero h1 {
    font-size: 54px; font-weight: 800; color: white;
    line-height: 1.15; margin-bottom: 20px;
}
.hero h1 span { color: var(--accent); }
.hero p {
    font-size: 17px; color: rgba(255,255,255,0.75);
    line-height: 1.85; margin-bottom: 36px; max-width: 600px;
}
.hero-btns { display: flex; gap: 14px; flex-wrap: wrap; }
.btn-glass {
    background: rgba(255,255,255,0.12);
    color: white;
    border: 1px solid rgba(255,255,255,0.25);
    backdrop-filter: blur(6px);
}
.btn-glass:hover {
    background: rgba(255,255,255,0.22);
    color: white;
}

/* ===== STATS ROW ===== */
.stats-row {
    position: relative;
    z-index: 10;
    margin-top: -80px;
    padding: 0 0 40px;
}
.stats-row .inner {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: grid; grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.stats-row .s-card {
    background: white;
    border: 1px solid var(--border);
    border-radius: 16px; padding: 28px 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s;
}
.stats-row .s-card:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    transform: translateY(-5px);
}
.stats-row .s-icon { font-size: 28px; color: var(--primary); margin-bottom: 12px; }
.stats-row .s-num { font-size: 36px; font-weight: 800; color: var(--text-dark); }
.stats-row .s-lbl { font-size: 14px; color: var(--text-muted); font-weight: 500; margin-top: 4px; }

/* ===== QUICK MENU ===== */
.quick-menu { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.qm-item {
    background: white; border-radius: 16px; padding: 28px 20px;
    text-align: center; box-shadow: var(--shadow);
    border: 1px solid var(--border); cursor: pointer;
    transition: all 0.3s; text-decoration: none;
    color: var(--text-dark); display: block;
}
.qm-item:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); border-color: var(--primary); }
.qm-icon {
    width: 60px; height: 60px; border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 26px; margin: 0 auto 14px;
}
.qm-item h3 { font-size: 14px; font-weight: 700; margin-bottom: 5px; }
.qm-item p { font-size: 12px; color: var(--text-muted); line-height: 1.5; }

/* ===== UMKM CARDS ===== */
.umkm-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.umkm-card { background: white; border-radius: 14px; overflow: hidden; box-shadow: var(--shadow); border: 1px solid var(--border); transition: all 0.3s; }
.umkm-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.umkm-card img { width: 100%; height: 160px; object-fit: cover; }
.umkm-card .uc-body { padding: 16px; }
.umkm-card .uc-badge { display: inline-block; background: var(--bg-light); color: var(--primary); padding: 3px 10px; border-radius: 100px; font-size: 11px; font-weight: 600; margin-bottom: 8px; }
.umkm-card h4 { font-size: 14px; font-weight: 700; margin-bottom: 4px; }
.umkm-card p { font-size: 12px; color: var(--text-muted); }

/* ===== GALERI ===== */
.galeri-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.galeri-item { position: relative; border-radius: 12px; overflow: hidden; aspect-ratio: 4/3; cursor: pointer; }
.galeri-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; display: block; }
.galeri-item img[src=""], .galeri-item img:not([src]) { display: none; }
.galeri-item:hover img { transform: scale(1.08); }
.galeri-item .overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); opacity: 0; transition: opacity 0.3s; display: flex; align-items: flex-end; padding: 16px; }
.galeri-item:hover .overlay { opacity: 1; }
.galeri-item .overlay span { color: white; font-size: 13px; font-weight: 600; }

/* ===== CTA BANNER ===== */
.cta-banner { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); border-radius: 20px; padding: 48px; display: flex; justify-content: space-between; align-items: center; gap: 24px; }
.cta-banner h2 { font-size: 28px; font-weight: 800; color: white; margin-bottom: 10px; }
.cta-banner p { color: rgba(255,255,255,0.75); font-size: 15px; }

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
    .hero h1 { font-size: 40px; }
    .stats-row .inner { grid-template-columns: repeat(2, 1fr); }
    .quick-menu { grid-template-columns: repeat(2, 1fr); }
    .umkm-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
    .hero h1 { font-size: 30px; }
    .hero-content { padding: 120px 20px 80px; }
    .stats-row .inner { grid-template-columns: repeat(2, 1fr); }
    .quick-menu, .umkm-grid, .galeri-grid { grid-template-columns: repeat(2, 1fr); }
    .cta-banner { flex-direction: column; text-align: center; }
}
</style>
@endsection

@section('content')

<!-- ===== HERO ===== -->
<section class="hero">
    <video autoplay loop muted playsinline class="hero-video" id="bgVideo">
        <source src="{{ asset('images/beranda/lv_7620500222858349831_20260721151031.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-pattern" style="z-index: 1;"></div>
    <div class="hero-content">
        <h1>Selamat Datang di<br><span>Desa Sitorajo Kari</span></h1>
        <p>Desa yang kaya akan budaya, alam yang indah, dan masyarakat yang ramah. Bersama membangun desa yang maju, sejahtera, dan berdaya.</p>
        <div class="hero-btns" style="justify-content: center;">
            <button onclick="toggleVideoSound()" id="soundToggleBtn" class="btn btn-glass" style="background:rgba(0,0,0,0.3); border-color:rgba(255,255,255,0.4);"><i class="fas fa-volume-up"></i> Nyalakan Suara Video</button>
            <a href="{{ route('profil') }}" class="btn btn-accent"><i class="fas fa-landmark"></i> Profil Desa</a>
            <a href="{{ route('kontak') }}" class="btn btn-glass"><i class="fas fa-envelope"></i> Hubungi Kami</a>
        </div>
    </div>
</section>

<!-- ===== STATS ROW ===== -->
<div class="stats-row">
    <div class="inner">
        <div class="s-card">
            <div class="s-icon"><i class="fas fa-users"></i></div>
            <div class="s-num">2043</div>
            <div class="s-lbl">Jiwa Penduduk</div>
        </div>
        <div class="s-card">
            <div class="s-icon"><i class="fas fa-home"></i></div>
            <div class="s-num">567</div>
            <div class="s-lbl">Kepala Keluarga</div>
        </div>
        <div class="s-card">
            <div class="s-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="s-num">3</div>
            <div class="s-lbl">Dusun</div>
        </div>
        <div class="s-card">
            <div class="s-icon"><i class="fas fa-calendar"></i></div>
            <div class="s-num">1996</div>
            <div class="s-lbl">Tahun Berdiri</div>
        </div>
    </div>
</div>

<!-- ===== QUICK MENU ===== -->
<section class="section" style="background:var(--bg-light); padding-top: 20px;">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-grid-2"></i> Menu Cepat</div>
            <h2 class="section-title">Akses <span>Layanan Desa</span></h2>
            <p class="section-sub">Temukan informasi yang Anda butuhkan dengan mudah dan cepat</p>
        </div>
        <div class="quick-menu">
            <a href="{{ route('profil') }}" class="qm-item">
                <div class="qm-icon" style="background:#d1fae5;color:#059669"><i class="fas fa-landmark"></i></div>
                <h3>Profil Desa</h3><p>Informasi umum desa</p>
            </a>
            <a href="{{ route('perangkat') }}" class="qm-item">
                <div class="qm-icon" style="background:#e8eddf;color:#596645"><i class="fas fa-users"></i></div>
                <h3>Perangkat Desa</h3><p>Struktur pemerintahan</p>
            </a>
            <a href="{{ route('data-penduduk') }}" class="qm-item">
                <div class="qm-icon" style="background:#fef3c7;color:#d97706"><i class="fas fa-chart-pie"></i></div>
                <h3>Data Penduduk</h3><p>Statistik kependudukan</p>
            </a>
            <a href="{{ route('kebudayaan') }}" class="qm-item">
                <div class="qm-icon" style="background:#ede9fe;color:#7c3aed"><i class="fas fa-masks-theater"></i></div>
                <h3>Kebudayaan</h3><p>Tradisi & budaya lokal</p>
            </a>
            <a href="{{ route('galeri-foto') }}" class="qm-item">
                <div class="qm-icon" style="background:#dbeafe;color:#2563eb"><i class="fas fa-images"></i></div>
                <h3>Galeri Foto</h3><p>Dokumentasi kegiatan</p>
            </a>
            <a href="{{ route('peta') }}" class="qm-item">
                <div class="qm-icon" style="background:#fce7f3;color:#db2777"><i class="fas fa-map-location-dot"></i></div>
                <h3>Peta Lokasi</h3><p>Temukan kami di sini</p>
            </a>
            <a href="{{ route('kontak') }}" class="qm-item">
                <div class="qm-icon" style="background:#fef9c3;color:#ca8a04"><i class="fas fa-envelope"></i></div>
                <h3>Kontak</h3><p>Hubungi kami</p>
            </a>
        </div>
    </div>
</section>


<!-- ===== GALERI TERBARU ===== -->
@if($galeriTerbaru->count() > 0)
<section class="section" style="background:var(--bg-light);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-images"></i> Galeri</div>
            <h2 class="section-title">Momen <span>Desa Sitorajo</span></h2>
        </div>
        <div class="galeri-grid">
            @foreach($galeriTerbaru as $g)
            @if($g->file)
            <div class="galeri-item">
                <img src="{{ asset($g->file) }}" alt="{{ $g->judul }}"
                     onerror="this.closest('.galeri-item').style.display='none'">
                <div class="overlay"><span>{{ $g->judul }}</span></div>
            </div>
            @endif
            @endforeach
        </div>
        <div style="text-align:center;margin-top:32px">
            <a href="{{ route('galeri-foto') }}" class="btn btn-primary"><i class="fas fa-images"></i> Lihat Galeri Lengkap</a>
        </div>
    </div>
</section>
@endif

<!-- ===== CTA BANNER ===== -->
<section class="section">
    <div class="container">
        <div class="cta-banner">
            <div>
                <h2>Ada Pertanyaan atau Keperluan?</h2>
                <p>Kami siap membantu Anda. Hubungi kantor desa kami atau kirim pesan melalui form kontak.</p>
            </div>
            <div style="display:flex;gap:12px;flex-shrink:0;flex-wrap:wrap">
                <a href="{{ route('kontak') }}" class="btn btn-accent"><i class="fas fa-envelope"></i> Kirim Pesan</a>
                <a href="{{ route('peta') }}" class="btn btn-glass"><i class="fas fa-map"></i> Lihat Peta</a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('bgVideo');
    var btn = document.getElementById('soundToggleBtn');
    
    function updateBtn() {
        if (video.muted) {
            btn.innerHTML = '<i class="fas fa-volume-up"></i> Nyalakan Suara Video';
            btn.style.background = 'rgba(0,0,0,0.3)';
        } else {
            btn.innerHTML = '<i class="fas fa-volume-mute"></i> Matikan Suara Video';
            btn.style.background = 'rgba(220,38,38,0.3)';
        }
    }

    // Paksa coba putar bersuara secara terus menerus sampai berhasil
    var tryPlaySound = setInterval(function() {
        if (video.dataset.userToggled === "true") {
            clearInterval(tryPlaySound);
            return;
        }
        
        video.muted = false;
        var promise = video.play();
        if (promise !== undefined) {
            promise.then(function() {
                // Jika sukses bersuara
                updateBtn();
                clearInterval(tryPlaySound);
            }).catch(function(error) {
                // Jika diblokir, mainkan tanpa suara dulu
                video.muted = true;
                video.play();
                updateBtn();
            });
        }
    }, 1000); // Coba setiap 1 detik jika user berinteraksi dengan halaman

    // Bersihkan interval jika user klik secara sadar di manapun
    document.body.addEventListener('click', function() {
        if (video.muted && video.dataset.userToggled !== "true" && window.scrollY <= 300) {
            video.muted = false;
            video.play();
            updateBtn();
            clearInterval(tryPlaySound);
        }
    }, { once: true });

    // Observer untuk mengatur play/pause saat scroll
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                // Video terlihat (scroll ke atas) -> hidup dan lanjut lagi
                if (video.dataset.userToggled !== "true") {
                    video.muted = false; // nyalakan musik
                    video.play(); // lanjut videonya
                    updateBtn();
                } else if (video.dataset.userToggled === "true" && !video.muted) {
                    video.play();
                } else {
                    video.play();
                }
            } else {
                // Video tidak terlihat (scroll ke bawah) -> musik & video mati (pause)
                if (video.dataset.userToggled !== "true") {
                    video.pause();
                    video.muted = true;
                    updateBtn();
                } else {
                    video.pause();
                }
            }
        });
    }, { threshold: 0.1 }); // Bereaksi saat 90% video hilang/muncul

    var heroSection = document.querySelector('.hero');
    if (heroSection) {
        observer.observe(heroSection);
    }
});

function toggleVideoSound() {
    var video = document.getElementById('bgVideo');
    video.dataset.userToggled = "true";
    
    if (video.muted) {
        video.muted = false;
        video.play();
    } else {
        video.muted = true;
    }
    
    var btn = document.getElementById('soundToggleBtn');
    if (video.muted) {
        btn.innerHTML = '<i class="fas fa-volume-up"></i> Nyalakan Suara Video';
        btn.style.background = 'rgba(0,0,0,0.3)';
    } else {
        btn.innerHTML = '<i class="fas fa-volume-mute"></i> Matikan Suara Video';
        btn.style.background = 'rgba(220,38,38,0.3)';
    }
}
</script>

@endsection
