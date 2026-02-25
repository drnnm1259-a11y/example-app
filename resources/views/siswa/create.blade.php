<h2>Tambah Data Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    Nama : <br>
    <input type="text" name="nama"><br><br>

    Kelas : <br>
    <input type="text" name="kelas"><br><br>

    Jurusan : <br>
    <input type="text" name="jurusan"><br><br>

    Alamat : <br>
    <textarea name="alamat"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>