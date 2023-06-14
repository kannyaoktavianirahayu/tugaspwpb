<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="nis" value="{{$data->nis}}"> <br> <br>
        <input type="text" name="nama" value="{{$data->nama}}"> <br> <br>
        <input type="text" name="kelas" value="{{$data->kelas}}"> <br> <br>
        <input type="text" name="alamat" value="{{$data->alamat}}"> <br> <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>