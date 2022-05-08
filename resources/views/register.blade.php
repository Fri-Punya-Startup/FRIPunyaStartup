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
            <form action="">
                <label for="email"><h6>Email Address</h6></abbr></label><br>
                <input type="text" id="mail"  name="email" placeholder="Masukan Alamat Email" required><br>
                
                <label for="password"><h6>Password</h6></label><br>
                <input type="password" id="fname" pattern="[A-Za-z]+" name="password" placeholder="Masukan Password" required><br>
                
                <label for="class"><h6>Class</h6></label><br>
                <input type="text" id="kelas" pattern="[0-9]+"name="class" placeholder="3"required><br>
                
                <label for="checkbox"><h6>Year</h6></label><br>  
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Iya
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Tidak
                        </label>
                    </div><br>
               
                <label for="year2"><h6>Year</h6></label><br>  
                <input type="number" value="2021" min="2021"id="Year" name="Year" required><br>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
 <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
@endsection