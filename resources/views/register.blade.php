<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>REGISTER</h1>
    <form action="register" method="POST" enctype="multipart/form-data">
        @csrf
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap"><br>
        <input type="text" name="nik" placeholder="NIK"><br>
        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"><br>
        <input type="date" name="tanggal_lahir"><br>
        <select name="role" id="role">
            <option selected>Pilih Tipe Akun</option>
            <option value="panitia">Panitia</option>
            <option value="anggota">Anggota</option>
        </select><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option selected>Jenis Kelamin</option>
            <option value="l">Laki - Laki</option>
            <option value="p">Perempuan</option>
        </select><br>
        <input type="text" name="no_telepon" placeholder="No. Telepon"><br>
        <input type="text" name="alamat" placeholder="Alamat"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="file" name="surat_komitment"><br>
        <button type="submit">Daftar</button>
    </form>
</body>

</html>