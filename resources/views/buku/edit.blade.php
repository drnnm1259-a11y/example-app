<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f4f6f9">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">✏️ Edit Data Buku</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control"
                        value="{{ $buku->judul }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control"
                        value="{{ $buku->penulis }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control"
                        value="{{ $buku->penerbit }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control"
                        value="{{ $buku->tahun_terbit }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Buku</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                {{-- Preview Gambar Lama --}}
                @if($buku->gambar)
                    <div class="mb-3">
                        <label class="form-label">Gambar Saat Ini:</label><br>
                        <img src="{{ asset('storage/'.$buku->gambar) }}" 
                             width="120" class="img-thumbnail">
                    </div>
                @endif

                <button type="submit" class="btn btn-success">
                    💾 Update
                </button>
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">
                    ⬅ Kembali
                </a>

            </form>

        </div>
    </div>
</div>

</body>
</html>