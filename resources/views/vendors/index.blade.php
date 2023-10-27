<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENDOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        <p class="judulpage">SATUAN (AKTIF)</p>
        <button class="button" type="submit" href="addrole">ADD VENDOR</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>BADAN HUKUM</th>
                    <th>STATUS</th>
                    <th>CRUD</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($vendor as $vendor)
                <tr>
                <td>{{$vendor->id_vendor}}</td>
                <td>{{$vendor->nama_vendor}}</td>
                <td>{{$vendor->badan_hukum}}</td>
                <td>
                    @if ($vendor->status==1)
                    aktif
                    @else
                    non-aktif
                    @endif
                </td>
                <td>
                <ul class="crudjudul">
                    <li class="crud"><a href="vendor/{{$vendor->id_vendor}}/edit">edit</a></li>
                    <li class="crud"><a href="vendor/{{$vendor->id_vendor}}/softdel">soft delete</a></li>
                    <li class="crud"><a href="vendor/{{$vendor->id_vendor}}/delete">delete</a></li>
                </ul>
                </td>
                {{-- <td><p class="crud"><a href="roles/{{$role->id_role}}/softdel">soft delete</a></p></td> --}}
                {{-- <td><p class="crud"><a href="roles/{{$role->id_role}}/delete">delete</a></p></td> --}}
            @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>