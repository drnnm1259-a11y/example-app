<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="text-center mb-4">
        <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
        <p class="text-muted">Pilih Menu</p>
    </div>

    <div class="row text-center">

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>🎓 Data Siswa</h4>
                    <a href="{{ route('siswa.index') }}" class="btn btn-primary mt-3 w-100">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>📚 Data Buku</h4>
                    <a href="{{ route('buku.index') }}" class="btn btn-success mt-3 w-100">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>🚪 Logout</h4>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger mt-3 w-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>