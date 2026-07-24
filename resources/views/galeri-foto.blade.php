@extends('layouts.app')
@section('title','Galeri Foto')
@section('head')
<style>
    .galeri-grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    .galeri-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow);
        border: 1px solid var(--border);
        transition: transform 0.3s ease;
    }
    .galeri-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    .galeri-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }
    .galeri-info {
        padding: 16px;
        text-align: center;
    }
    .galeri-info h3 {
        font-size: 16px;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
    }
    .galeri-info p {
        font-size: 13px;
        color: var(--text-muted);
        margin-top: 4px;
    }
    @media (max-width: 1024px) {
        .galeri-grid-3 { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
        .galeri-grid-3 { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-images"></i> Galeri Foto</h1>
        <p>Kumpulan foto kegiatan dan panorama Desa Sitorajo</p>
        <div class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a><i class="fas fa-chevron-right"></i><span>Galeri Foto</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="galeri-grid-3">
            @forelse($foto as $f)
            <div class="galeri-card">
                <img src="{{ asset($f->file) }}" alt="{{ $f->judul }}">
                <div class="galeri-info">
                    <h3>{{ $f->judul }}</h3>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 50px; background: var(--bg-light); border-radius: 12px; color: var(--text-muted);">
                Belum ada foto dalam galeri.
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
