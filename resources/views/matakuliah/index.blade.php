<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>
    @if(session('error'))
    <div style="color: red; background-color: #fdd; padding: 10px; margin-bottom: 15px; border: 1px solid red;">
        {{ session('error') }}
    </div>
@endif

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        @foreach($matakuliahs as $index => $mk)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>
                <a href="{{ route('matakuliah.mahasiswa', $mk->id) }}">Lihat Mahasiswa</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>