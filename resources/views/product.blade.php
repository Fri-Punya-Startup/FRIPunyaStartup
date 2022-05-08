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
            <h1 class="hero">Our Portfolio</h1>
        </div>
        <div class="container">
            <div class="head">
                <p class="black">Our Portfolio/ </p><p class="light">{{$porto->product}}</p>
            </div>

            <div class="row">
                <div class="column" style="background-color:#aaa;">Image container here
                <div class="image" style="background:red;">
                   <p>kene yo oleh</p>
                </div>
               </div>
                <div class="column">
                   <h3>{{$porto->product}}</h3>
                   <p class="type">Type: &nbsp<a href="/portofolio?type={{$porto->type->name}}"> {{$porto->type->name}}</a></p>
                   <p class="founder">Founder: <a href="/portofolio?founder={{$porto->user->name}}">{{$porto->user->name}}</a> </p>
                   <p>{{$porto->description}}</p>
                   <div class="button">
                    <a href="{{$porto->web}}" class="button-dark">Visit Website</a>
                    <a href="https://wa.me/+6281325101443" class="button-light">Contact Founder</a>
                </div>
                </div>
               
            </div>
        </div>
</body>
</html>
@endsection