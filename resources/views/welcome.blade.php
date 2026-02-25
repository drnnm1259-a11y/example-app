<h2>Data Siswa</h2>

<a href="{{ route('siswa.create') }}">Tambah Data</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat</th>
    </tr>

    @foreach($siswas as $no => $siswa)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>{{ $siswa->jurusan }}</td>
        <td>{{ $siswa->alamat }}</td>
    </tr>
    @endforeach
</table>