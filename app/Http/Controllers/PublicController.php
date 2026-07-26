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
        $totalPerangkat = 12; // Hardcoded to avoid DB query
        $galeri = collect([
            (object)['file' => '/images/momen/Hari%20Raya%20Idul%20Adha.jpg', 'judul' => 'Hari Raya Idul Adha'],
            (object)['file' => '/images/momen/Latihan%20Pacu%20Jalur%20Persiapan%20Rayon%202.jpeg', 'judul' => 'Latihan Pacu Jalur Persiapan Rayon 2'],
            (object)['file' => '/images/momen/Latihan%20Pacu%20Jalur%20Persiapan%20Rayon%204.jpeg', 'judul' => 'Latihan Pacu Jalur Persiapan Rayon 4'],
            (object)['file' => '/images/momen/Pacu%20Jalur%20Tapian%20Datuok%20Bandaro%20Pasar%20Gunung.jpeg', 'judul' => 'Pacu Jalur Tapian Datuok Bandaro Pasar Gunung'],
            (object)['file' => '/images/momen/Pacu%20Jalur%20Tapian%20Narosa%20Teluk%20Kuantan.jpeg', 'judul' => 'Pacu Jalur Tapian Narosa Teluk Kuantan'],
            (object)['file' => '/images/momen/Panen%20Jagung%20Pipil.jpg', 'judul' => 'Panen Jagung Pipil'],
            (object)['file' => '/images/momen/Pawai%20Pembukaan%20MTQ.jpeg', 'judul' => 'Pawai Pembukaan MTQ'],
            (object)['file' => '/images/momen/Penanaman%20Toga.jpeg', 'judul' => 'Penanaman Toga'],
            (object)['file' => '/images/momen/Persesi.jpeg', 'judul' => 'Persesi'],
            (object)['file' => '/images/momen/Pertandingan%20di%20Petai.jpeg', 'judul' => 'Pertandingan di Petai'],
            (object)['file' => '/images/momen/Posyandu.jpeg', 'judul' => 'Posyandu'],
            (object)['file' => '/images/momen/SD%20021%20Sitorajo.jpeg', 'judul' => 'SD 021 Sitorajo'],
            (object)['file' => '/images/momen/Senam%20Pagi.jpeg', 'judul' => 'Senam Pagi'],
        ]);
        $galeriTerbaru = $galeri;
        return view('beranda', compact('totalPenduduk', 'totalPerangkat', 'galeriTerbaru'));
    }

    public function profil() { return view('profil'); }
    public function sejarah() { return view('sejarah'); }
    public function kebudayaan() { return view('kebudayaan'); }
    public function struktur() { return view('struktur'); }

    public function perangkat()
    {
        // Hardcoded while DB is offline
        $perangkat = collect([]);
        return view('perangkat', compact('perangkat'));
    }

    public function dataPenduduk()
    {
        $jenisKelamin = collect([
            (object)['nama' => 'Laki-Laki', 'jumlah' => 1031],
            (object)['nama' => 'Perempuan',  'jumlah' => 1012],
        ]);
        $pendidikan = collect([
            (object)['nama' => 'SD',       'jumlah' => 581],
            (object)['nama' => 'SMP',      'jumlah' => 105],
            (object)['nama' => 'SMA/SMK',  'jumlah' => 95],
            (object)['nama' => 'Sarjana',  'jumlah' => 123],
        ]);
        $totalPenduduk = 2043;
        return view('data-penduduk', compact('jenisKelamin', 'pendidikan', 'totalPenduduk'));
    }

    public function galeriFoto()
    {
        $foto = collect([
            (object)['file' => '/images/momen/Hari%20Raya%20Idul%20Adha.jpg', 'judul' => 'Hari Raya Idul Adha'],
            (object)['file' => '/images/momen/Latihan%20Pacu%20Jalur%20Persiapan%20Rayon%202.jpeg', 'judul' => 'Latihan Pacu Jalur Persiapan Rayon 2'],
            (object)['file' => '/images/momen/Latihan%20Pacu%20Jalur%20Persiapan%20Rayon%204.jpeg', 'judul' => 'Latihan Pacu Jalur Persiapan Rayon 4'],
            (object)['file' => '/images/momen/Pacu%20Jalur%20Tapian%20Datuok%20Bandaro%20Pasar%20Gunung.jpeg', 'judul' => 'Pacu Jalur Tapian Datuok Bandaro Pasar Gunung'],
            (object)['file' => '/images/momen/Pacu%20Jalur%20Tapian%20Narosa%20Teluk%20Kuantan.jpeg', 'judul' => 'Pacu Jalur Tapian Narosa Teluk Kuantan'],
            (object)['file' => '/images/momen/Panen%20Jagung%20Pipil.jpg', 'judul' => 'Panen Jagung Pipil'],
            (object)['file' => '/images/momen/Pawai%20Pembukaan%20MTQ.jpeg', 'judul' => 'Pawai Pembukaan MTQ'],
            (object)['file' => '/images/momen/Penanaman%20Toga.jpeg', 'judul' => 'Penanaman Toga'],
            (object)['file' => '/images/momen/Persesi.jpeg', 'judul' => 'Persesi'],
            (object)['file' => '/images/momen/Pertandingan%20di%20Petai.jpeg', 'judul' => 'Pertandingan di Petai'],
            (object)['file' => '/images/momen/Posyandu.jpeg', 'judul' => 'Posyandu'],
            (object)['file' => '/images/momen/SD%20021%20Sitorajo.jpeg', 'judul' => 'SD 021 Sitorajo'],
            (object)['file' => '/images/momen/Senam%20Pagi.jpeg', 'judul' => 'Senam Pagi'],
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
