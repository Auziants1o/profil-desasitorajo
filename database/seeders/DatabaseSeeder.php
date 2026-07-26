<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Perangkat;
use App\Models\Penduduk;
use App\Models\Umkm;
use App\Models\Galeri;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@sitorajo.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Data Perangkat Desa
        $perangkat = [
            ['Kepala Desa', 'Ropis Indra, S.Pd.I', '-', 'SMA/Sederajat', '/images/perangkat/ropis indra kepala desa.jpeg'],
            ['Sekretaris Desa', 'Indra Franata', '-', 'SMA/Sederajat', '/images/perangkat/indra franata sekretaris desa.jpeg'],
            ['Bendahara', 'Dede Aptrian Todi, S.IP', '-', 'Sarjana/S1', '/images/perangkat/dede aptrian todi bendahara desa.jpeg'],
            ['Kepala Urusan Pemerintahan', 'Siska Oktalia', '-', 'SMA/Sederajat', '/images/perangkat/siska oktalia urusan pemerintahan.jpeg'],
            ['Kepala Urusan Pembangunan', 'Adis Saputra, S.IP', '-', 'Sarjana/S1', '/images/perangkat/adis saputra urusan pembangunan.jpeg'],
            ['Kepala Urusan Umum', 'Astri Andrina, SE', '-', 'Sarjana/S1', '/images/perangkat/astri andrina urusan umum.jpeg'],
            ['Kepala Dusun Bunai Jaya', 'Randi Desra, S.Pd', '-', 'Sarjana/S1', '/images/perangkat/Randi Desra bunai jaya.jpeg'],
            ['Kepala Dusun Tengah', 'Uswandi', '-', '-', '/images/perangkat/uswandi dusun tengah.jpeg'],
            ['Kepala Dusun Sei. Kembar', 'Erwandi', '-', '-', '/images/perangkat/erwandi sei. kembar.jpeg'],
        ];
        
        foreach ($perangkat as $index => $p) {
            Perangkat::create([
                'nama' => $p[1],
                'jabatan' => $p[0],
                'nip' => $p[2],
                'pendidikan' => $p[3],
                'foto' => $p[4] ?? null,
                'urutan' => $index + 1,
            ]);
        }

        // 3. Data Penduduk
        $penduduk = [
            // Jenis Kelamin
            ['jenis_kelamin', 'Laki-Laki', 1031],
            ['jenis_kelamin', 'Perempuan', 1012],
            // Pendidikan
            ['pendidikan', 'SD', 581],
            ['pendidikan', 'SMP', 105],
            ['pendidikan', 'SMA/SMK', 95],
            ['pendidikan', 'Sarjana', 123],
        ];

        foreach ($penduduk as $pd) {
            Penduduk::create([
                'kategori' => $pd[0],
                'nama' => $pd[1],
                'jumlah' => $pd[2],
            ]);
        }

        // 4. Data UMKM
        Umkm::create([
            'nama_usaha' => 'Kopi Robusta Sitorajo',
            'jenis_usaha' => 'Kuliner/Pertanian',
            'pemilik' => 'Pak Harun',
            'deskripsi' => 'Kopi robusta asli dari perkebunan warga Desa Sitorajo. Dipetik merah dan diproses dengan teknik tradisional untuk menghasilkan cita rasa kopi yang mantap dan khas.',
            'kontak' => '08123456701',
            'alamat' => 'Dusun 1, RT 02 RW 01',
            'foto' => 'https://images.unsplash.com/photo-1559525839-b184a4d698c7?w=400&q=80',
        ]);
        
        Umkm::create([
            'nama_usaha' => 'Kerajinan Anyaman Bambu',
            'jenis_usaha' => 'Kerajinan Tangan',
            'pemilik' => 'Ibu Darmi',
            'deskripsi' => 'Menyediakan berbagai macam kerajinan anyaman bambu seperti tampah, bakul, lampion, dan perabotan rumah tangga lainnya. Menerima pesanan partai besar maupun kecil.',
            'kontak' => '08123456702',
            'alamat' => 'Dusun 2, RT 01 RW 03',
            'foto' => 'https://images.unsplash.com/photo-1596791244406-8c4ed4461eb9?w=400&q=80',
        ]);
        
        Umkm::create([
            'nama_usaha' => 'Keripik Pisang Maknyus',
            'jenis_usaha' => 'Kuliner',
            'pemilik' => 'Mbak Sari',
            'deskripsi' => 'Keripik pisang renyah dengan berbagai varian rasa: original, coklat, balado, dan keju. Cocok untuk oleh-oleh atau camilan bersantai bersama keluarga.',
            'kontak' => '08123456703',
            'alamat' => 'Dusun 3, RT 04 RW 02',
            'foto' => 'https://images.unsplash.com/photo-1621939514649-280e2ee25f60?w=400&q=80',
        ]);

        // 5. Data Galeri
        Galeri::create(['judul' => 'Balai Desa Sitorajo', 'deskripsi' => 'Pusat pelayanan masyarakat', 'tipe' => 'foto', 'file' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?w=600&q=80']);
        Galeri::create(['judul' => 'Panen Raya', 'deskripsi' => 'Kegiatan panen padi warga desa', 'tipe' => 'foto', 'file' => 'https://images.unsplash.com/photo-1595844730298-b960fad97351?w=600&q=80']);
        Galeri::create(['judul' => 'Gotong Royong', 'deskripsi' => 'Kerja bakti membersihkan lingkungan', 'tipe' => 'foto', 'file' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600&q=80']);
        Galeri::create(['judul' => 'Seni Tari', 'deskripsi' => 'Penampilan tari tradisional di hari kemerdekaan', 'tipe' => 'foto', 'file' => 'https://images.unsplash.com/photo-1555597673-b21d5c935865?w=600&q=80']);
        
        // Contoh Video (YouTube Embed)
        Galeri::create(['judul' => 'Profil Singkat Desa', 'deskripsi' => 'Video perkenalan Desa Sitorajo', 'tipe' => 'video', 'file' => 'https://www.youtube.com/embed/dQw4w9WgXcQ']);
    }
}
