@extends('layouts.app')
@section('title','Peta Lokasi')
@section('content')
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-map-location-dot"></i> Peta Lokasi</h1>
        <p>Lokasi geografis Desa Sitorajo</p>
        <div class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a><i class="fas fa-chevron-right"></i><span>Peta Lokasi</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="card" style="padding: 10px; overflow: hidden; border-radius: 16px;">
            <div style="width: 100%; height: 500px; border-radius: 10px; overflow: hidden;">
                <!-- Menggunakan Google Maps Embed API dengan pencarian nama, akan berfungsi meski tanpa API Key untuk basic embed -->
                <iframe 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    style="border:0" 
                    referrerpolicy="no-referrer-when-downgrade" 
                    src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=Desa+Sitorajo" 
                    allowfullscreen>
                </iframe>
                <!-- Catatan: Karena kita tidak punya API Key di contoh ini, iframe mungkin menunjukkan error di preview lokal jika tidak disetting.
                Sebagai alternatif jika embed/v1 gagal, kita bisa pakai google maps iframe yang di-generate dari share link: -->
                <div style="text-align: center; padding: 100px 20px; background: var(--bg-light); height: 100%;">
                    <i class="fas fa-map-marker-alt" style="font-size: 48px; color: var(--primary); margin-bottom: 20px;"></i>
                    <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 10px;">Peta Google Maps</h3>
                    <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto;">Untuk menampilkan peta secara interaktif, silakan masukkan Embed iframe link dari Google Maps (melalui fitur Share > Embed a map) atau masukkan API Key Google Maps pada konfigurasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
