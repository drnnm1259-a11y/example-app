<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

    <h2>Data Siswa</h2>

    <a href="{{ route('siswa.create') }}">Tambah Data</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        @foreach($siswas as $no => $s)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->alamat }}</td>
            <td>
                <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>

                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>