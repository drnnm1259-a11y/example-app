<h2>Tambah Data Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    <label>Nama</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" required><br><br>

    <label>Jurusan</label><br>
    <input type="text" name="jurusan" required><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat" required></textarea><br><br>

    <button type="submit">Simpan</button>
</form>