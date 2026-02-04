<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.store') }}" method="POST">
                        
                            @csrf

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NIM</label>
                                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM Mahasiswa">
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">KELAS</label>
                                <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">MATA KULIAH</label>
                                <input type="text" class="form-control" name="matakuliah" placeholder="Masukkan Mata Kuliah">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>