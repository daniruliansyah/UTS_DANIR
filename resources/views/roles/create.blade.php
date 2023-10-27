<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        @include('layouts.header')
        <p class="judulpage">Tambah Role</p>
    </header>
    <main>
        
    </main>
    <footer>
        <form action="{{ url ('roles')}}" method="post">
            @csrf
            <input type="text" name="id" placeholder="masukkan id role">
            <input type="text" name="nama" placeholder="nama role">
            <button type="submit">tambah</button>
        </form>
        @include('layouts.footer')
    </footer>
</body>
</html>