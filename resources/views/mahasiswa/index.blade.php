<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Daftar Data Mahasiswa</h2>
        
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>MATA KULIAH</th>
            <th>AKSI</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($mahasiswas as $m)
            <tr>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->kelas }}</td>
                <td>{{ $m->matakuliah }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mahasiswa.destroy', $m->nim) }}" method="POST">
                        <a href="{{ route('mahasiswa.edit', $m->nim) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Data Mahasiswa belum Tersedia.</td>
            </tr>
        @endforelse
    </tbody>
</table>