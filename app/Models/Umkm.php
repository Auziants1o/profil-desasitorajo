<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkm';
    protected $fillable = ['nama_usaha', 'jenis_usaha', 'pemilik', 'deskripsi', 'kontak', 'alamat', 'foto', 'aktif'];
}
