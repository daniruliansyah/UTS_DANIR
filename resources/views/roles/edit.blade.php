<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA ROLE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        
        <form action="roles/{{$role->id_role}}" method="post">
            @csrf
            @method('put')
            <input type="text" name="nama" value="{{ $role->nama_role}}" placeholder="ubahan nama role">
            <button type="submit">edit</button>
        </form>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>