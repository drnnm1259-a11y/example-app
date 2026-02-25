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
        <th>Aksi</th>
    </tr>

    @forelse($siswas as $no => $siswa)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>{{ $siswa->jurusan }}</td>
        <td>{{ $siswa->alamat }}</td>
        <td>
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>

            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6">Belum ada data</td>
    </tr>
    @endforelse
</table>