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
        <h1 class="hero text-light">Login Form</h1>
    </div>
    <div class="story">
        <div class="form">
            <h2 class="form-header">Login</h2>
            <form action="">
                <label for="email"><h6>Email Address</h6></abbr></label><br>
                <input type="text" id="mail"  name="email" placeholder="Masukan Alamat Email" required><br>
                
                <label for="password"><h6>Password</h6></label><br>
                <input type="password" id="fname" pattern="[A-Za-z]+" name="password" placeholder="Masukan Password" required><br>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
 <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
@endsection