<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow col-md-4 mx-auto">
        <div class="card-body">
            <h4 class="text-center mb-4">Login</h4>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf

                <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                <button class="btn btn-success w-100">Login</button>
            </form>

            <div class="text-center mt-3">
                <a href="/register">Belum punya akun? Register</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>