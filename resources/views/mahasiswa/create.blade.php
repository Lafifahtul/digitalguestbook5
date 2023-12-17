@extends('layout.app')

@section('content')
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        {{ csrf_field() }}
        nama: <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
        alamat: <input type="text" name="alamat" placeholder="Alamat" required><br>
        tanggal lahir: <input type="date" name="date" required><br>
        <input type="submit" value="submit">
    
    
    
    </form>
</div>