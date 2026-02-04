<!DOCTYPE html>
<html>
<head>
    <title>Modul Laravel 12</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6ff;
            text-align: center;
            padding-top: 80px;
        }

        .card {
            background: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
        }

        ul {
            text-align: left;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Selamat Datang, {{ $nama }}!</h1>

        <h3>Mata Kuliah:</h3>
        <ul>
            @foreach ($matakuliah as $mk)
                <li>{{ $mk }}</li>
            @endforeach
        </ul>

        <p>Laravel 12 dengan bantuan AI</p>
    </div>

</body>
</html>
