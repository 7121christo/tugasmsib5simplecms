@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border=1 >
        <tr align="center">
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ( $kategoris as $kategori )
            <tr align="center">
                <td >{{ $kategori->id }}</td>
                <td ><a href="{{ route("show", $kategori->id) }}">{{ $kategori->namaKategori }}</a></td>
                <td >{{ $kategori->deskripsi }}</td>
                <td >
                    <form action="{{ route('edit', $kategori) }}" method="get">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('delete', ['kategori' => $kategori->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5" align="right">
                <a href="{{ route('create') }}"><button type="submit">Create</button></a>
            </td>
        </tr>
    </table>

</body>
</html>
    </div>
</div>
@endsection
