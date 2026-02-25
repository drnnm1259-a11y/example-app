<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            Edit Data Siswa
        </div>
        <div class="card-body">

            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" required>{{ $siswa->alamat }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>