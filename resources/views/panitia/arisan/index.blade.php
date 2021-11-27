@extends('templatePanitia')
@section('konten')
<br>
<a href="/panitia/arisan/tambah">Tambah</a>
@if (session('sukses'))
<div class="alert alert-danger">
    {{ session('sukses') }}
</div>
@endif
<table border="1">
    <thead>
        <th>Nama Arisan</th>
        <th>Jumlah Anggota</th>
        <th>Periode</th>
        <th>Besaran Iuran</th>
        <th>Deskripsi</th>
    </thead>
    <tbody>
        @foreach ($arisan as $arisan)
        <tr>
            <td>{{ $arisan->nama_arisan }}</td>
            <td>{{ $arisan->jumlah_anggota }}</td>
            <td>{{ $arisan->periode }}</td>
            <td>{{ $arisan->iuran }}</td>
            <td>{{ $arisan->deskripsi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection