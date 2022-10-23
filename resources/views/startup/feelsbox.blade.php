@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio</title>
    <link rel="stylesheet" href="../css/product/style.css">
</head>
<body>
        <div style="padding:15px;text-align:center;" class="header">
            <h1 class="hero">Our Startup</h1>
        </div>
        <div class="container">
            {{-- <div class="head">
                <p class="black">Our Portfolio/ </p><p class="light">{{$porto->product}}</p>
            </div> --}}

            <div class="row">
                <div class="column" >
                    <div class="container gambar">
                        <img src="../images/feelsbox.png" alt="">
                    </div>
               </div>
                <div class="column">
                   <h3>Feelsbox</h3>
                   <p class="type">Type: &nbsp Kesehatan Mental</p>
                   <p class="founder">Founder: Muhammad Fathi Rabbani</a> </p>
                   <h5>Feelsbox merupakan platform layanan kesehatan mental untuk usia remaja. Layanan kami meliputi konseling, mentoring, self-tracking, hingga coaching</h5>
                   <br>
                   <div class="button">
                    <a href="" class="button-dark">Visit Website</a>
                    <a href="https://wa.me/+6281211441550" class="button-light">Contact Founder</a>
                </div>
                </div>
               
            </div>
        </div>
</body>
</html>
@endsection