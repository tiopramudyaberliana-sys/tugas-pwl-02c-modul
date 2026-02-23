<h2>Tambah Mahasiswa</h2>

<form action="/mahasiswa" method="POST">
@csrf

<input type="text" name="nama" placeholder="Nama"><br><br>
<input type="text" name="nim" placeholder="NIM"><br><br>
<input type="text" name="kelas" placeholder="Kelas"><br><br>

<button type="submit">Simpan</button>

</form>
