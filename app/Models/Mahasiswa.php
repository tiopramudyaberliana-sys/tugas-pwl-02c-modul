<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    // INI YANG TADI KURANG (Daftar kolom yang boleh diisi)
    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'matakuliah',
    ];
    
    // Karena primary key kita 'nim' (bukan 'id'), kita kasih tahu Laravel:
    protected $primaryKey = 'nim';
    
    // Kalau 'nim' bukan angka (misal ada hurufnya), aktifkan ini:
    public $incrementing = false;
    protected $keyType = 'string';
}