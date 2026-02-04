<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MahasiswaController extends Controller
{
    // 1. INDEX
    public function index(): View
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // 2. CREATE
    public function create(): View
    {
        return view('mahasiswa.create');
    }

    // 3. STORE (Bagian ini yang tadi Error, sudah diperbaiki)
    public function store(Request $request): RedirectResponse
    {
        // Ganti $this->validate jadi $request->validate
        $request->validate([
            'nim'     => 'required',
            'nama'    => 'required',
            'kelas'   => 'required',
            'matakuliah' => 'required'
        ]);

        Mahasiswa::create([
            'nim'     => $request->nim,
            'nama'    => $request->nama,
            'kelas'   => $request->kelas,
            'matakuliah' => $request->matakuliah
        ]);

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // 4. EDIT
    public function edit(string $nim): View
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // 5. UPDATE (Ini juga diperbaiki)
    public function update(Request $request, $nim): RedirectResponse
    {
        // Ganti $this->validate jadi $request->validate
        $request->validate([
            'nim'     => 'required',
            'nama'    => 'required',
            'kelas'   => 'required',
            'matakuliah' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);

        $mahasiswa->update([
            'nim'     => $request->nim,
            'nama'    => $request->nama,
            'kelas'   => $request->kelas,
            'matakuliah' => $request->matakuliah
        ]);

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    // 6. DESTROY
    public function destroy($nim): RedirectResponse
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}