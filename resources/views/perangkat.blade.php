@extends('layouts.app')
@section('title','Perangkat Desa')
@section('content')
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-users"></i> Perangkat Desa</h1>
        <p>Mengenal para pelayan masyarakat di Desa Sitorajo</p>
        <div class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a><i class="fas fa-chevron-right"></i><span>Perangkat Desa</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Aparatur <span>Pemerintahan Desa</span></h2>
        </div>
        
        @php
            $kades = $perangkat->where('jabatan', 'Kepala Desa')->first();
            $sekdesBendahara = $perangkat->whereIn('jabatan', ['Sekretaris Desa', 'Bendahara']);
            $kaur = $perangkat->filter(function($p) { return str_contains($p->jabatan, 'Kepala Urusan'); });
            $kadus = $perangkat->filter(function($p) { return str_contains($p->jabatan, 'Kepala Dusun'); });
        @endphp

        @if($kades)
        <div style="display: flex; justify-content: center; margin-bottom: 40px;">
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 320px;">
                <img src="{{ $kades->foto ? asset($kades->foto) : 'https://ui-avatars.com/api/?name='.urlencode($kades->nama).'&background=1a6b3a&color=fff&size=140' }}" alt="{{ $kades->nama }}" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);">{{ $kades->nama }}</h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 15px; margin-bottom: 15px;">{{ $kades->jabatan }}</div>
                @if($kades->pendidikan)
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: {{ $kades->pendidikan }}</div>
                @endif
            </div>
        </div>
        @endif
        
        @if($sekdesBendahara->count() > 0)
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 40px; flex-wrap: wrap;">
            @foreach($sekdesBendahara as $p)
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 300px;">
                <img src="{{ $p->foto ? asset($p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=1a6b3a&color=fff&size=120' }}" alt="{{ $p->nama }}" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);">{{ $p->nama }}</h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 14px; margin-bottom: 15px;">{{ $p->jabatan }}</div>
                @if($p->pendidikan)
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: {{ $p->pendidikan }}</div>
                @endif
            </div>
            @endforeach
        </div>
        @endif

        @if($kaur->count() > 0)
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 40px; flex-wrap: wrap;">
            @foreach($kaur as $p)
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 300px;">
                <img src="{{ $p->foto ? asset($p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=1a6b3a&color=fff&size=120' }}" alt="{{ $p->nama }}" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);">{{ $p->nama }}</h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 14px; margin-bottom: 15px;">{{ $p->jabatan }}</div>
                @if($p->pendidikan)
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: {{ $p->pendidikan }}</div>
                @endif
            </div>
            @endforeach
        </div>
        @endif

        @if($kadus->count() > 0)
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 40px; flex-wrap: wrap;">
            @foreach($kadus as $p)
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 300px;">
                <img src="{{ $p->foto ? asset($p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=1a6b3a&color=fff&size=120' }}" alt="{{ $p->nama }}" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);">{{ $p->nama }}</h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 14px; margin-bottom: 15px;">{{ $p->jabatan }}</div>
                @if($p->pendidikan)
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: {{ $p->pendidikan }}</div>
                @endif
            </div>
            @endforeach
        </div>
        @endif
        
        @if($perangkat->count() === 0)
        <div style="text-align: center; padding: 50px; background: var(--bg-light); border-radius: 12px; color: var(--text-muted);">
            Belum ada data perangkat desa yang ditambahkan.
        </div>
        @endif
    </div>
</section>
@endsection
