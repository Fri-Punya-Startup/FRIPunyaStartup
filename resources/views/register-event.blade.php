@extends("layouts.main")

@section('content')

<head>
    <title>registration form</title>
    <link rel="stylesheet" href="../css/register-event/register-event.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="header">
        <h1 class="hero text-light">Register Event</h1>
    </div>
    <div class="story">
        <div class="form">
            <h2 class="form-header">{{$event->title}}</h2>
            {{-- @dd($event) --}}
            <img src="/storage/{{$event->poster}}" alt="" srcset="">
            <br>
            <br>
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
                <label for="kuliah">Masukan Kampus</label>
                <input type="text" name="kampus" id="">
                <br>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
 <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
@endsection