<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa; // <-- TAMBAHKAN BARIS INI

class MahasiswaController extends Controller
{
   public function index()
{
    // Mengambil semua data dan menyimpannya di variabel $mahasiswas
    $mahasiswas = Mahasiswa::all(); 

    // Mengirim variabel $mahasiswas tersebut ke halaman view
    return view('mahasiswa.index', compact('mahasiswas')); 
}


    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'matakuliah_id' => 1
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswas')->where('id', $id)->first();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        DB::table('mahasiswas')->where('id', $id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas
        ]);

        return redirect('/mahasiswa');
    }

    public function destroy($id)
    {
        DB::table('mahasiswas')->where('id', $id)->delete();
        return redirect('/mahasiswa');
    }
}
