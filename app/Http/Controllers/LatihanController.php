<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function index()
    {
        $matakuliah = [
            'Pemrograman Web Lanjut',
            'Data Mining',
            'Artificial Intelligence'
        ];

        return view('welcome_mahasiswa', [
            'nama' => 'Mahasiswa STMIK IKMI',
            'matakuliah' => $matakuliah
        ]);
    }
}
