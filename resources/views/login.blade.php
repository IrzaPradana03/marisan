<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>LOGIN</h1>
    <form action="login" method="POST">
        @csrf
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if (session('sukses'))
        <div class="alert alert-danger">
            {{ session('sukses') }}
        </div>
        @endif
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Masuk</button>
        <p>Belum punya akun? <a href="register">Daftar disini</a></p>
    </form>
</body>

</html>