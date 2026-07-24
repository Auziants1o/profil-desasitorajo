@extends('layouts.app')
@section('title','Kontak & Peta')
@section('content')
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-envelope"></i> Kontak Kami</h1>
        <p>Hubungi pemerintahan Desa Sitorajo untuk informasi dan layanan</p>
        <div class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a><i class="fas fa-chevron-right"></i><span>Kontak</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <!-- Form Kontak -->
            <div class="card" style="padding: 30px;">
                <h2 style="font-size: 22px; font-weight: 700; margin-bottom: 20px;">Kirim Pesan</h2>
                @if(session('success'))
                <div class="alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('kontak.kirim') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 5px;">Nama Lengkap</label>
                        <input type="text" name="nama" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; font-family: 'Poppins';" placeholder="Masukkan nama Anda">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 5px;">Email</label>
                        <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; font-family: 'Poppins';" placeholder="Masukkan email Anda">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 5px;">Pesan Anda</label>
                        <textarea name="pesan" rows="5" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; font-family: 'Poppins'; resize: vertical;" placeholder="Tulis pesan atau pertanyaan..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Kirim Pesan <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>

            <!-- Info Kontak -->
            <div>
                <h2 style="font-size: 22px; font-weight: 700; margin-bottom: 20px;">Informasi Kontak</h2>
                <div style="display: flex; flex-direction: column; gap: 20px;">
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <div style="width: 45px; height: 45px; border-radius: 10px; background: var(--bg-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4 style="font-size: 15px; font-weight: 700; margin-bottom: 5px;">Alamat Kantor</h4>
                            <p style="font-size: 14px; color: var(--text-muted); line-height: 1.6;">Jalan Madrasah Sitorajo Kari</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <div style="width: 45px; height: 45px; border-radius: 10px; background: var(--bg-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4 style="font-size: 15px; font-weight: 700; margin-bottom: 5px;">Email</h4>
                            <p style="font-size: 14px; color: var(--text-muted);">sitorajokari@gmail.com</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <div style="width: 45px; height: 45px; border-radius: 10px; background: var(--bg-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;"><i class="fas fa-phone"></i></div>
                        <div>
                            <h4 style="font-size: 15px; font-weight: 700; margin-bottom: 5px;">Telepon / WhatsApp</h4>
                            <p style="font-size: 14px; color: var(--text-muted);">+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 15px; align-items: flex-start;">
                        <div style="width: 45px; height: 45px; border-radius: 10px; background: var(--bg-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4 style="font-size: 15px; font-weight: 700; margin-bottom: 5px;">Jam Pelayanan</h4>
                            <p style="font-size: 14px; color: var(--text-muted);">Senin - Kamis: 08:00 - 15:00 WIB<br>Jumat: 08:00 - 11:30 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
