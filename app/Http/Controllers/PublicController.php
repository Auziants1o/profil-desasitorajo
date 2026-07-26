<?php

namespace App\Http\Controllers;

use App\Models\Perangkat;
use App\Models\Penduduk;
use App\Models\Umkm;
use App\Models\Galeri;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function beranda()
    {
        $totalPenduduk = 2043; // Hardcoded as requested
        $totalPerangkat = Perangkat::count();
        $galeri = collect([
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-16%20at%2017.04.40%20(1).jpeg', 'judul' => 'Kegiatan Desa'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-16%20at%2017.04.40.jpeg', 'judul' => 'Kegiatan Warga'],
            (object)['file' => '/images/momen/_2564_Panen-Raya-Jagung-Pipil-di-Sitorajo-Kari--Camat-Kuantan-Tengah-Apresiasi-Program-Ketahanan-Pangan.jpg', 'judul' => 'Panen Raya Jagung'],
            (object)['file' => '/images/momen/IMG-20240617-WA0152.jpg', 'judul' => 'Momen Bersama'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-06-29%20at%2016.35.14.jpeg', 'judul' => 'Aktivitas Desa'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-03%20at%2007.36.37.jpeg', 'judul' => 'Gotong Royong'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-21%20at%2022.32.40.jpeg', 'judul' => 'Acara Desa'],
        ]);
        $galeriTerbaru = $galeri->take(7);
        return view('beranda', compact('totalPenduduk', 'totalPerangkat', 'galeriTerbaru'));
    }

    public function profil() { return view('profil'); }
    public function sejarah() { return view('sejarah'); }
    public function kebudayaan() { return view('kebudayaan'); }
    public function struktur() { return view('struktur'); }

    public function perangkat()
    {
        $perangkat = Perangkat::orderBy('urutan')->get();
        return view('perangkat', compact('perangkat'));
    }

    public function dataPenduduk()
    {
        $jenisKelamin = Penduduk::where('kategori', 'jenis_kelamin')->get();
        $pendidikan = Penduduk::where('kategori', 'pendidikan')->get();
        $totalPenduduk = 2043;
        return view('data-penduduk', compact('jenisKelamin', 'pendidikan', 'totalPenduduk'));
    }

    public function potensi() { return view('potensi'); }

    public function galeriFoto()
    {
        $foto = collect([
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-16%20at%2017.04.40%20(1).jpeg', 'judul' => 'Kegiatan Desa'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-16%20at%2017.04.40.jpeg', 'judul' => 'Kegiatan Warga'],
            (object)['file' => '/images/momen/_2564_Panen-Raya-Jagung-Pipil-di-Sitorajo-Kari--Camat-Kuantan-Tengah-Apresiasi-Program-Ketahanan-Pangan.jpg', 'judul' => 'Panen Raya Jagung'],
            (object)['file' => '/images/momen/IMG-20240617-WA0152.jpg', 'judul' => 'Momen Bersama'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-06-29%20at%2016.35.14.jpeg', 'judul' => 'Aktivitas Desa'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-03%20at%2007.36.37.jpeg', 'judul' => 'Gotong Royong'],
            (object)['file' => '/images/momen/WhatsApp%20Image%202026-07-21%20at%2022.32.40.jpeg', 'judul' => 'Acara Desa'],
        ]);
        return view('galeri-foto', compact('foto'));
    }



    public function kontak() { return view('kontak'); }
    public function peta() { return view('peta'); }

    public function kirimKontak(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);
        return back()->with('success', 'Pesan Anda telah terkirim. Kami akan segera menghubungi Anda!');
    }
}
