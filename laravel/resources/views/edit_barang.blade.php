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
        <input type="text" name="nama" value="{{$data->nama}}"> <br> <br>
        <input type="text" name="kode" value="{{$data->kode}}"> <br> <br>
        <input type="text" name="harga" value="{{$data->harga}}"> <br> <br>
        
        <input type="submit" value="submit">
    </form>
</body>
</html>