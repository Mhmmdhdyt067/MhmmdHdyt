<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fakultas Peternakan">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="{{ asset('images/login/logo.png') }}" type="image/x-icon" />
    <title>Login | Database Mahasiswa</title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/login/signin.css') }}">

</head>

<body class="text-center">

    <main class="form-signin">

        <img class="mb-4" src="{{ asset('images/login/logo.png') }}" alt="" width="90" height="auto">

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <form action="/login" method="POST">
            @csrf

            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    id="username" placeholder="Username">
                <label for="username">Username</label>

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password" placeholder="Password">
                <label for="password">Password</label>

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>

        <p class="mt-5 mb-3 text-muted">Fakultas Peternakan</p>
    </main>



</body>

</html>