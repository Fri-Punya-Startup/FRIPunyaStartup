@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="./css/contact/contact.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"/>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <h1 class="us">Contact Us</h1>
            </div>
        </div>
        <div class="contacts">
            <div class="row">
                <div class="col">
                    <h5>Get In Touch</h5>
                    <br/><br/>
                    <h2>fps.telkom@gmail.com</h2>
                    <h3>+62 00 000 000 000</h3>
                    <br/><br/>
                    <h5>Fakultas Rekayasa Industri</h5>
                    <br/><br/><br/>
                    <h5 class="h5">Telkom University</h5>
                    <h5 class="h5">Jalan Telekomunikasi No 1</h5>
                    <h5 class="h5">Bandung</h5>
                </div>
                <div class="col">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.6067944257!2d107.63086664180298!3d-6.973486891532496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x613eec0feec9fcf7!2sTelkom%20University%20Landmark%20Tower%20(TULT)!5e0!3m2!1sen!2sid!4v1651330544559!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection