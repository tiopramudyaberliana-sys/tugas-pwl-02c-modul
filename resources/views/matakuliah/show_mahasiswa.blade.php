<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa per MK</title>
</head>
<body>
    <h1>Mahasiswa yang mengambil MK: {{ $matakuliah->nama_mk }}</h1>

    <a href="{{ route('matakuliah.index') }}">Kembali ke Daftar Mata Kuliah</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kelas</th>
        </tr>
        @forelse($matakuliah->mahasiswas as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->kelas }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Belum ada mahasiswa yang mengambil mata kuliah ini.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>