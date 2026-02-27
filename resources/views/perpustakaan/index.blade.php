<!DOCTYPE html>
<html>
<head>
    <title>Data perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4 text-center">📚 Data perpustakaan</h2>

    <div class="mb-3 text-end">
        <a href="{{ route('perpustakaan.create') }}" class="btn btn-primary">
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
                    @foreach ($perpustakaans as $perpustakaan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $perpustakaan->cover }}</td>
                        <td>{{ $perpustakaan->judul }}</td>
                        <td>{{ $perpustakaan->penulis }}</td>
                        <td>{{ $perpustakaan->penerbit }}</td>
                        <td>{{ $perpustakaan->tahun_terbit }}</td>
                        <td>
                            <a href="{{ route('perpustakaan.edit', $perpustakaan->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('perpustakaan.destroy', $perpustakaan->id) }}" method="POST" style="display:inline;">
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

                    @if($perpustakaans->isEmpty())
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