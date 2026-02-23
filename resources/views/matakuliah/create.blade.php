<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah Baru</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf <div>
            <label>Kode Mata Kuliah:</label><br>
            <input type="text" name="kode_mk" required>
        </div>
        <br>
        
        <div>
            <label>Nama Mata Kuliah:</label><br>
            <input type="text" name="nama_mk" required>
        </div>
        <br>

        <div>
            <label>SKS:</label><br>
            <input type="number" name="sks" required>
        </div>
        <br>

        <button type="submit">Simpan Data</button>
        <a href="{{ route('matakuliah.index') }}">Batal</a>
    </form>
</body>
</html>