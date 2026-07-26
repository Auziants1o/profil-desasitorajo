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
        <div class="card" style="padding: 10px; border-radius: 16px;">
            <div style="width: 100%; border-radius: 10px; overflow: hidden;">
                <img src="{{ asset('images/peta-potensi-desa.jpg') }}" alt="Peta Potensi Desa Sitorajo" style="width: 100%; height: auto; border-radius: 10px; display: block;">
            </div>
        </div>
    </div>
</section>
@endsection
