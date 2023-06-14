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
        <td>nis</td>
            <td>nama</td>
            <td>kelas</td>
            <td>alamat</td>
        </tr>

        @foreach($data as $data)
            <tr>
            <td>{{$data->nis}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->kelas}}</td>
                <td>{{$data->alamat}}</td>
                <td><a href="/hapus_siswaa/{{$data->id}}">Hapus</a>
                    <a href="/edit_siswaa/{{$data->id}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>