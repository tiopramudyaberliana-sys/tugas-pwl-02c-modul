<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    // Supaya bisa diisi melalui form (mass assignment)
    protected $fillable = ['kode_mk', 'nama_mk', 'sks']; 

    // INI YANG BIKIN ERROR KALAU GAK ADA ATAU SALAH KETIK
    // Relasi One-to-Many ke tabel mahasiswas
    public function mahasiswas() 
    {
        return $this->hasMany(Mahasiswa::class); 
    }
}