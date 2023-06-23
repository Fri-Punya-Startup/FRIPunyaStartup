@extends("admin.layouts")

@section('content')

<head>
    <title>registration form</title>
    <link rel="stylesheet" href="../../../css/admin/show.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="story">
        <div class="form">
            <h2 class="form-header">Detail Calon Anggota</h2>
            <form action="/register" method="post" enctype="multipart/form-data">
                @csrf

                <label for="email"><h5>Nama</h5></abbr></label><br> 
                <input type="text" id="mail" name="name" placeholder="Masukan Nama"  value="{{$user->name}}" readonly="readonly"><br>
                <br>

                <label for="username"><h5>Email</h5></label>
                <input type="text" id="mail" name="email" placeholder="Masukan Alamat Email"   value="{{$user->email}}" readonly="readonly"><br>
                <br>

                <label for="username"><h5>No Hp</h5></label>
                <input type="number" id="no_hp" name="no_hp" placeholder="Masukan No Hp"   value="{{$user->no_hp}}" readonly="readonly"><br>
                <br>

                <label for="alasan"><h5>Alasan mengikuti FPS</h5></label>
                <input type="text" id="alasan" name="alasan" placeholder="Masukan Alasan Mengikuti FPS"  value="{{$user->alasan}}" readonly="readonly"><br>
                <br>

                <label for="harapan"> <h5>Harapan Mengikuti FPS</h5></label>
                <input type="text" id="harapan" name="harapan" placeholder="Masukan Harapan Mengikuti FPS"  value="{{$user->harapan}}" readonly="readonly"><br>
                <br>

                <label for="startup"> <h5>Role</h5></label>
                <input type="text" id="startup" name="startup" placeholder="Masukan Nama Startup"  value="{{$user->role}}" readonly="readonly"><br>
                <br>

                <label for="startup"> <h5>Skill</h5></label>
                <input type="text" id="startup" name="startup" placeholder="Masukan Nama Startup"  value="{{$user->skill}}" readonly="readonly"><br>
                <br>

                <label for="startup"> <h5>Startup</h5></label>
                <input type="text" id="startup" name="startup" placeholder="Masukan Nama Startup"  value="{{$user->startup}}" readonly="readonly"><br>
                <br>

                <label for="cv"> <h5>CV Kreatif</h5></label><br> 
                <iframe src="../../storage/cv/{{$user->cv}}" width="100%" height="700px"></iframe>
                <br>

            </form>
        </div>
    </div>
    <script src="{{asset('js/registration.js')}}"></script>
 <script src="{{asset('js/validation.js')}}"></script>
</body>
</html>
@endsection