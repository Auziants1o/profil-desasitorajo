@extends('layouts.app')
@section('title','Data Penduduk')
@section('content')
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-chart-pie"></i> Data Penduduk</h1>
        <p>Statistik kependudukan Desa Sitorajo</p>
        <div class="breadcrumb"><a href="{{ route('beranda') }}">Beranda</a><i class="fas fa-chevron-right"></i><span>Data Penduduk</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Statistik <span>Kependudukan</span></h2>
            <p class="section-sub">Total Penduduk: {{ number_format($totalPenduduk) }} Jiwa</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <!-- Berdasarkan Jenis Kelamin -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Jenis Kelamin</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jenisKelamin as $jk)
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);">{{ $jk->nama }}</td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;">{{ number_format($jk->jumlah) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Berdasarkan Agama -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Agama</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agama as $a)
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);">{{ $a->nama }}</td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;">{{ number_format($a->jumlah) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Berdasarkan Pendidikan -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Pendidikan</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendidikan as $p)
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);">{{ $p->nama }}</td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;">{{ number_format($p->jumlah) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Berdasarkan Pekerjaan -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Pekerjaan</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pekerjaan as $pk)
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);">{{ $pk->nama }}</td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;">{{ number_format($pk->jumlah) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
