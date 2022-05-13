@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <label for="email"><h6>Nama</h6></abbr></label><br>
                <input type="text" id="mail" name="name" placeholder="Masukan Nama" required @error('name')is-invalid @enderror><br>
                @error('name')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <label for="email"><h6>Email Address</h6></abbr></label><br>
                <input type="text" id="mail" name="email" placeholder="Masukan Alamat Email" required @error('email')is-invalid @enderror><br>
                @error('email')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <label for="password"><h6>Password</h6></label><br>
                <input type="password" id="fname" pattern="[A-Za-z]+" name="password" placeholder="Masukan Password" required><br>
                @error('password')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                {{-- <label for="class"><h6>Class</h6></label><br>
                <input type="text" id="kelas" pattern="[0-9]+"name="class" placeholder="3"required><br>
                <br>
           
                <label for="year2"><h6>Year</h6></label><br>  
                <input type="number" value="2021" min="2021"id="year" name="year" required><br> --}}
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
 <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
@endsection