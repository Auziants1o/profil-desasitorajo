<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function beranda()
    {
        $totalPenduduk = 2043; // Hardcoded
        $totalPerangkat = 9; // Hardcoded
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
        $perangkat = collect([
            (object)['nama' => 'Ropis Indra, S.Pd.I',      'jabatan' => 'Kepala Desa',                    'pendidikan' => 'Sarjana/S1', 'foto' => '/images/perangkat/ropis indra kepala desa.jpeg',               'urutan' => 1],
            (object)['nama' => 'Indra Franata',             'jabatan' => 'Sekretaris Desa',                'pendidikan' => 'SMA/Sederajat', 'foto' => '/images/perangkat/indra franata sekretaris desa.jpeg',         'urutan' => 2],
            (object)['nama' => 'Dede Aptrian Todi, S.IP',  'jabatan' => 'Bendahara',                      'pendidikan' => 'Sarjana/S1',    'foto' => '/images/perangkat/dede aptrian todi bendahara desa.jpeg',      'urutan' => 3],
            (object)['nama' => 'Siska Oktalia',             'jabatan' => 'Kepala Urusan Pemerintahan',     'pendidikan' => 'SMA/Sederajat', 'foto' => '/images/perangkat/siska oktalia urusan pemerintahan.jpeg',     'urutan' => 4],
            (object)['nama' => 'Adis Saputra, S.IP',       'jabatan' => 'Kepala Urusan Pembangunan',      'pendidikan' => 'Sarjana/S1',    'foto' => '/images/perangkat/adis saputra urusan pembangunan.jpeg',      'urutan' => 5],
            (object)['nama' => 'Astri Andrina, SE',         'jabatan' => 'Kepala Urusan Umum',             'pendidikan' => 'Sarjana/S1',    'foto' => '/images/perangkat/astri andrina urusan umum.jpeg',            'urutan' => 6],
            (object)['nama' => 'Randi Desra, S.Pd',        'jabatan' => 'Kepala Dusun Bunai Jaya',        'pendidikan' => 'Sarjana/S1',    'foto' => '/images/perangkat/Randi Desra bunai jaya.jpeg',               'urutan' => 7],
            (object)['nama' => 'Uswandi',                   'jabatan' => 'Kepala Dusun Tengah',            'pendidikan' => '-',             'foto' => '/images/perangkat/uswandi dusun tengah.jpeg',                 'urutan' => 8],
            (object)['nama' => 'Erwandi',                   'jabatan' => 'Kepala Dusun Sei. Kembar',       'pendidikan' => '-',             'foto' => '/images/perangkat/erwandi sei. kembar.jpeg',                  'urutan' => 9],
        ]);
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
