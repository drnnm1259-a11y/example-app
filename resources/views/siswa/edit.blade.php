<h2>Edit Data Siswa</h2>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama : <br>
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    Kelas : <br>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>

    Jurusan : <br>
    <input type="text" name="jurusan" value="{{ $siswa->jurusan }}"><br><br>

    Alamat : <br>
    <textarea name="alamat">{{ $siswa->alamat }}</textarea><br><br>

    <button type="submit">Update</button>
</form>