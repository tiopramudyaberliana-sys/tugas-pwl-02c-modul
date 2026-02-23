<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    @if(session('error'))
        <div style="color: red; background-color: #fdd; padding: 10px; margin-bottom: 15px; border: 1px solid red;">
            <strong>{{ session('error') }}</strong>
        </div>
    @endif

    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswas as $index => $mhs)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->kelas }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>