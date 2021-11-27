@extends('templatePanitia')
@section('konten')
<br>
<a href="">Keluar</a>
<form action="/panitia/profile" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @if (session('sukses'))
    <div class="alert alert-danger">
        {{ session('sukses') }}
    </div>
    @endif
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $nama_lengkap }}"><br>
    <input type="text" name="nik" placeholder="NIK" value="{{ $nik }}"><br>
    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $tempat }}"><br>
    <input type="date" name="tanggal_lahir" value="{{ $tanggal_lahir }}"><br>
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option selected>Jenis Kelamin</option>
        <option value="l" <?= $jenis_kelamin == 'l' ? 'selected' : ''; ?>>Laki - Laki</option>
        <option value="p" <?= $jenis_kelamin == 'p' ? 'selected' : ''; ?>>Perempuan</option>
    </select><br>
    <input type="text" name="no_telepon" placeholder="No. Telepon" value="{{ $no_telepon }}"><br>
    <input type="text" name="alamat" placeholder="Alamat" value="{{ $alamat }}"><br>
    <input type="text" name="username" placeholder="Username" value="{{ $username }}"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">SIMPAN</button>
</form>
@endsection