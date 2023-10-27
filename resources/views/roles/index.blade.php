<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        <p class="judulpage">ROLES</p>
        <form action="/roles/create" method="get">
            <button class="button" type="submit">ADD ROLE</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>CRUD</th>
                </tr>
            </thead>
            <tbody>
                @foreach($role as $role)
                @csrf
                    <tr>
                    <td>{{$role->id_role}}</td>
                    <td>{{$role->nama_role}}</td>
                    <td>
                    <ul class="crudjudul">
                        <li class="crud"><a href="roles/{{$role->id_role}}/edit">edit</a></li>
                        <li class="crud"><a href="roles/{{$role->id_role}}/softdel">soft delete</a></li>
                        <li class="crud"><a href="roles/{{$role->id_role}}/delete">delete</a></li>
                    </ul>
                    </td>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>