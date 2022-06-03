<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>
<body>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <h2>{{ $event->title }}</h2>
    <form action="/register-event/{{$event->slug}}" method="post">
        @csrf
        <input type="hidden" name="id" value={{$event->id}}>
        <label for="nama">Masukan Nama</label>
        <input type="text" name="nama" id="">
        <label for="email">Masukan Email</label>
        <input type="text" name="email" id="">
        <label for="wa">Masukan Nomor Whatsapp</label>
        <input type="text" name="no-wa" id="">
        <label for="jurusan">Masukan Jurusan</label>
        <input type="text" name="jurusan" id="">
        <label for="kuliah">Masukan Kampu</label>
        <input type="text" name="kampus" id="">
        <button type="submit">Kirim</button>
    </form>
</form>
</body>
</html>