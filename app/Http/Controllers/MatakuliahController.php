<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Menampilkan Daftar Mata Kuliah
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    // Menampilkan Form Tambah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Menyimpan Data Mata Kuliah Baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required',
            'sks' => 'required|integer'
        ]);

        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    // Menampilkan Mahasiswa yang Mengambil Mata Kuliah Ini (Relasi hasMany)
    public function showMahasiswa($id)
    {
        $matakuliah = Matakuliah::with('mahasiswas')->findOrFail($id);
        return view('matakuliah.show_mahasiswa', compact('matakuliah'));
    }
}