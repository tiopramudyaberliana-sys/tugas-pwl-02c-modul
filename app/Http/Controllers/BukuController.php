<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Bonus Point 1: Type-Hinting

class BukuController extends Controller
{
    public function index(): View // Bonus Point 1: Type-Hinting
    {
        $data_buku = ['Laskar Pelangi', 'Bumi Manusia', 'Filosofi Teras'];
        return view('perpus_index', compact('data_buku'));
    }

    public function show(string $id)
    {
        return "Anda sedang melihat detail buku dengan Kode: " . $id;
    }
}