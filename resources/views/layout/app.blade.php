<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <hr>
    <a href="{{ route('mahasiswa.index')}}" class="btn btn-primary">HOME</a>
    <a href="{{ route('mahasiswa.create')}}" class="btn btn-primary">Tambahkan Mahasiswa</a>
    @yield('content')
</body>
</html>