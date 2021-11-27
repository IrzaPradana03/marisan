@extends('templatePanitia')
@section('konten')
<form action="/panitia/arisan/tambah" method="POST">
    @csrf
    <input type="text" name="nama_arisan" placeholder="Nama Arisan"><br>
    <input type="number" name="jumlah_anggota" placeholder="Jumlah Anggota"><br>
    <input type="number" name="periode" placeholder="Periode"><br>
    <input type="number" name="iuran" placeholder="Iuran"><br>
    <input type="text" name="deskripsi" placeholder="Deskripsi"><br>
    <button type="submit">Tambah</button>
</form>
@endsection