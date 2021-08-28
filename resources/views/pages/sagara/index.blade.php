<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('sagara.create') }}" class="btn btn-primary">Tambah</a>
    <table>
        <tr>
        <th>Nama</th>
        <th>Alamat</th>
        </tr>

        @foreach ($items as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }} </td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>