<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katalog Perpustakaan - STMIK IKMI</title>
</head>
<body>
    <h1>Daftar Koleksi Buku</h1>
    <ul>
        @foreach($data_buku as $buku)
            <li>{{ $buku }}</li>
        @endforeach
    </ul>
</body>
</html>