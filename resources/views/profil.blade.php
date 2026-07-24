@extends('layouts.app')
@section('title','Profil Desa')
@section('content')
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-landmark"></i> Profil Desa Sitorajo</h1>
        <p>Mengenal lebih dekat Desa Sitorajo — sejarah, geografi, dan potensinya</p>
        <div class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a><i class="fas fa-chevron-right"></i><span>Profil Desa</span></div>
    </div>
</div>

<section class="section">
<div class="container">
<div style="display:grid;grid-template-columns:2fr 1fr;gap:48px;align-items:start">
<div>
<div class="section-badge" style="margin-bottom:20px"><i class="fas fa-info-circle"></i> Tentang Kami</div>
<h2 style="font-size:32px;font-weight:800;margin-bottom:20px">Desa <span style="color:var(--primary)">Sitorajo Kari</span></h2>

<p style="font-size:16px;line-height:1.9;color:var(--text-muted);margin-bottom:20px">
Desa Sitorajo Kari berada dalam lingkup wilayah Kecamatan Kuantan Tengah dan secara administratif termasuk ke dalam wilayah Kabupaten Kuantan Singingi, Provinsi Riau. Desa Sitorajo Kari resmi terbentuk pada tahun 1996 dan sejak saat itu berkembang menjadi salah satu desa yang berperan dalam mendukung pembangunan di Kecamatan Kuantan Tengah.
</p>
<p style="font-size:16px;line-height:1.9;color:var(--text-muted);margin-bottom:20px">
Sejak berdirinya, Desa Sitorajo Kari terus mengalami perkembangan dalam berbagai aspek, baik di bidang pemerintahan, pembangunan infrastruktur, maupun pemberdayaan masyarakat. Pemerintah desa bersama masyarakat senantiasa menjalin kerja sama untuk meningkatkan kualitas pelayanan publik serta mendorong pembangunan yang berkelanjutan demi meningkatkan kesejahteraan masyarakat.
</p>
<p style="font-size:16px;line-height:1.9;color:var(--text-muted);margin-bottom:20px">
Selain memiliki potensi di sektor pertanian dan perkebunan, Desa Sitorajo Kari juga dikenal dengan budaya Pacu Jalur yang menjadi warisan budaya khas Kabupaten Kuantan Singingi. Tradisi ini masih terus dilestarikan oleh masyarakat sebagai bentuk pelestarian budaya serta penguatan nilai-nilai kebersamaan dan gotong royong.
</p>
<div style="font-size:16px;line-height:1.9;color:var(--text-muted);margin-bottom:20px">
Desa Sitorajo memiliki batas-batas wilayah sebagai berikut:
<ul style="margin-left: 20px; margin-top: 5px;">
    <li>Sebelah Utara : Desa Pintu Gobang, Kabupaten Kuantan Singingi</li>
    <li>Sebelah Selatan : Desa Pisang Berebus, Kabupaten Kuantan Singingi</li>
    <li>Sebelah Barat : Desa Jake, Kabupaten Kuantan Singingi</li>
    <li>Sebelah Timur : Desa Bandar Alai, Kabupaten Kuantan Singingi</li>
</ul>
</div>
<div style="font-size:16px;line-height:1.9;color:var(--text-muted)">
Sedangkan dusun yang ada di Desa Sitorajo sebagai berikut:
<ul style="margin-left: 20px; margin-top: 5px;">
    <li>Dusun I dengan kepala dusun pak Randi Desra, S.Pd memiliki 1 RW dan 2 RT dengan nama dusun Bunai Jaya.</li>
    <li>Dusun II dengan kepala dusun pak Uswandi memiliki 1 RW dan 2 RT dengan nama dusun Tengah.</li>
    <li>Dusun III dengan kepala dusun pak Erwandi memiliki 1 RW dan 2 RT dengan nama dusun Sei. Kembar.</li>
</ul>
</div>

</div>
<div>
<div class="card" style="padding:0;overflow:hidden">
<img src="{{ asset('images/profildesa/maxresdefault%20(1).jpg') }}" alt="Desa Sitorajo" style="width:100%;height:220px;object-fit:cover">
<div style="padding:24px">
<h3 style="font-size:16px;font-weight:700;margin-bottom:16px;color:var(--primary)"><i class="fas fa-table-list"></i> Data Umum Desa</h3>
<table style="width:100%;font-size:13.5px">
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Nama Desa</td><td style="padding:8px 0;font-weight:600">Sitorajo Kari</td></tr>
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Kecamatan</td><td style="padding:8px 0;font-weight:600">Kuantan Tengah</td></tr>
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Kabupaten</td><td style="padding:8px 0;font-weight:600">Kuantan Singingi</td></tr>
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Provinsi</td><td style="padding:8px 0;font-weight:600">Riau</td></tr>
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Luas Wilayah</td><td style="padding:8px 0;font-weight:600">1.076,00   Ha </td></tr>
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Jumlah Dusun</td><td style="padding:8px 0;font-weight:600">3 Dusun</td></tr>
<tr style="border-bottom:1px solid var(--border)"><td style="padding:8px 0;color:var(--text-muted)">Kode Pos</td><td style="padding:8px 0;font-weight:600">29562</td></tr>
<tr><td style="padding:8px 0;color:var(--text-muted)">Tahun Berdiri</td><td style="padding:8px 0;font-weight:600">1996</td></tr>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
