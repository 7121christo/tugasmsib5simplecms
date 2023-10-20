<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <table >
        <form action="{{ route('update', $kategori) }}" method="post">
            @method('patch')
            @csrf
        <tr>
            <td>Kode Kategori</td>
            <td>:</td>
            <td><input type="text" name="kodeKategori" id="" value="{{ $kategori->kodeKategori }}"></td>
        </tr>
        <tr>
            <td>Nama Kategori</td>
            <td>:</td>
            <td><input type="text" name="namaKategori" id="" value="{{ $kategori->namaKategori }}"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi" id="" value="{{ $kategori->deskripsi }}"><br></td>
        </tr>
        <tr align="right">
            <td colspan="3"><button type="submit">Update</button></td>
        </tr>
    </form>
    </table>
</body>
</html>
