<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>

    @if ($errors->any())
        @foreach ( $errors->all() as $error )
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <table >
        <form action="{{ route('store') }}" method="post">
            @csrf
        <tr>
            <td>Kode Kategori</td>
            <td>:</td>
            <td><input type="text" name="kodeKategori" id="" placeholder="Kode"></td>
        </tr>
        <tr>
            <td>Nama Kategori</td>
            <td>:</td>
            <td><input type="text" name="namaKategori" id="" placeholder="Nama"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi" id="" placeholder="Desc"><br></td>
        </tr>
        <tr align="right">
            <td colspan="3"><button type="submit">Add</button></td>
        </tr>
    </form>
    </table>




</body>
</html>
