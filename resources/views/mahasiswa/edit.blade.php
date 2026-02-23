<h2>Edit Mahasiswa</h2>

<form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br>
<input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
<input type="text" name="kelas" value="{{ $mahasiswa->kelas }}"><br>

<select name="matakuliah_id">
@foreach($matakuliah as $mk)
<option value="{{ $mk->id }}">
{{ $mk->nama_mk }}
</option>
@endforeach
</select>

<button type="submit">Update</button>
</form>
