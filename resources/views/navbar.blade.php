@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Open+Sans&family=Poppins:ital@1&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/07ce8168b2.js
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <img src="./images/LogoBrand.svg" alt="" width="270px" id="navbar__logo"> 
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="/" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__links">About Us</a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__links">Our Portfolio</a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__links">Our Activities</a>
                </li>
                <li class="navbar__btn">
                    <a href="/" class="button">Register</a>
                </li>
                <li class="navbar__btn">
                    <a href="/" class="button2">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="p-menu1">
     <nav id="navbar" class="navigation" role="navigation">
        <input id="toggle1" type="checkbox" />
            <label class="hamburger1" for="toggle1">
                <div class="top"></div>
                <div class="meat"></div>
                <div class="bottom"></div>
            </label>
            <nav class="menu1">
            <a class="navbar__links" href="">Home</a>
            <a class="navbar__links" href="">About Us</a>
            <a class="navbar__links" href="">Our Portfolio</a>
            <a class="lin1 kbutton-nav" href="">Register</a>
            <a class="lin1 kbutton-nav" href="">Contact Us</a>
            </nav>
        </nav>
</section>
    <script src="navbar.js"></script>
</body>
</html>
@endsection