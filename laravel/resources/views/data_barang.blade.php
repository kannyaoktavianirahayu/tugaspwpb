<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>nama</td>
            <td>kode</td>
            <td>harga</td>
        </tr>

        @foreach($data as $data)
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->kode}}</td>
                <td>{{$data->harga}}</td>
                <td><a href="/hapus_barang/{{$data->id}}">Hapus</a>
                    <a href="/edit_barang/{{$data->id}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>