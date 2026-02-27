<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow col-md-4 mx-auto">
        <div class="card-body">
            <h4 class="text-center mb-4">Register</h4>

            <form action="/register" method="POST">
                @csrf

                <input type="text" name="name" class="form-control mb-2" placeholder="Nama" required>
                <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                <button class="btn btn-primary w-100">Register</button>
            </form>

            <div class="text-center mt-3">
                <a href="/login">Sudah punya akun? Login</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>