@extends("layouts.main")

@section('content')

<head>
    <title>registration form</title>
    <link rel="stylesheet" href="./css/form/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="header">
        <h1 class="hero text-light">Register Form</h1>
    </div>
    <div class="story">
        <div class="form">
            <h2 class="form-header">Join Us</h2>
            <form action="/register" method="post">
                @csrf
                <label for="email"><h5>Nama</h5></abbr></label><br>
                <input type="text" id="mail" name="name" placeholder="Masukan Nama" required @error('name')is-invalid @enderror><br>
                @error('name')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <label for="username"><h5>Email</h5></abbr></label><br>
                <label for="">
                    <h6>                    
                       Harap masukan email Telkom agar kami dapat memverfikasi anda
                    </h6>
                </label>
                <br>
                <input type="text" id="mail" name="email" placeholder="Masukan Alamat Email" required @error('email')is-invalid @enderror><br>
                @error('email')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <label for="password"><h5>Password</h5></label><br>
                <input type="password" id="fname" pattern="[A-Za-z]+" name="password" placeholder="Masukan Password" required><br>
                @error('password')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <label for="role">
                    <h5>Daftar Sebagai</h5>
                </label>
                <br>
                <select class="form-select" name="role" aria-label="Default select example">
                    <option selected>Pilih</option>
                    <option value="member">Member</option>
                    <option value="founder">Founder</option>
                    <option value="alumni">Alumni</option>
                </select>
                @error('role')
                <p>{{ $message }}</p>
                @enderror
                <br>
                {{-- <label for="class"><h5>Class</h5></label><br>
                <input type="text" id="kelas" pattern="[0-9]+"name="class" placeholder="3"required><br>
                <br>
           
                <label for="year2"><h5>Year</h5></label><br>  
                <input type="number" value="2021" min="2021"id="year" name="year" required><br> --}}
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
 <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
@endsection