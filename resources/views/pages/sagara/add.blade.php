<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('sagara.store') }}" method="POST">
        @csrf
        <label>nama </label>
        <input type="text" name="nama">
        <label> alamat </label>
        <textarea name="alamat" id="" cols="30" rows="10" name="alamat"></textarea>
        <button type="submit">Tambah</button>
    </form>
    
</body>
</html>