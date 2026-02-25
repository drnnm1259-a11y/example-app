<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4 text-center">📚 Data Siswa</h2>

    <div class="mb-3 text-end">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin mau hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($siswas->isEmpty())
                    <tr>
                        <td colspan="6" class="text-muted">
                            Belum ada data
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>