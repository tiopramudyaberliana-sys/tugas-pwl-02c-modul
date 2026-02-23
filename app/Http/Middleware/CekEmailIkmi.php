<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekEmailIkmi
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login DAN emailnya berakhiran @ikmi.ac.id
        if (Auth::check() && str_ends_with(Auth::user()->email, '@ikmi.ac.id')) {
            return $next($request); // Izinkan lewat (berhasil hapus)
        }

        // Jika bukan email ikmi, tolak dan kembalikan ke halaman mahasiswa dengan pesan error
        return redirect()->route('mahasiswa.index')->with('error', 'Akses ditolak! Hanya admin @ikmi.ac.id yang bisa menghapus data.');
    }
}