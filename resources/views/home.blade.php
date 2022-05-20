@extends("layouts.main")

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Work+Sans:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/home/styles.css">
<div class="home">
    <div class="containers">
        <br>
        <br>
        <h1>Learn, Discuss</h1>
        <h1>Improve and</h1>
        <h1>Implement !</h1>
        <br/>
        <h4 class="sentence">We are FPS, we are a 
            <div class="slidingVertical">
                <span>Family</span>
                <span>Team</span>
                <span>Community</span> 
            </div>
        </h4>
        <br/>
        <h5>Let's join us and improve your startup with Us  !</h5>
        <br/>
    </div>

    <div class="aboutUs">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/home/about.svg" width="300" height="300" />
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <h2><span>|</span> About Us</h2>
                <h5>
                    FPS merupakan sebuah komunitas yang dibentuk dengan tujuan berkembang dan belajar bersama 
                    dalam menciptakan sebuah ide bisnis atau startup. Anggota dapat menjalin relasi sesama 
                    anggota maupun alumni dan berkembang bersama untuk menciptakan karya - karya unggulan di 
                    bawah naungan Fakultas Rekayasa Industri. FPS menjadi sarana untuk mahasiswa FRI 
                    (Fakultas Rekayasa Industri) dalam penciptaan sebuah inovasi,karya atau ide bisnis.
                </h5>
                <div class="more">
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container ourActivity">
        <h2><span>|</span> Our Activity</h2>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="activityItem">
                    <img src="/images/home/activity/competion.svg"  />
                    <div class="text">
                        <h4>Bootcamp & Workshop</h4>
                        <p>Ranah bagi anggota FPS untuk menambah insight dan knowledge baru dalam menciptakan sebuah karya atau produk.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="activityItem">
                    <image src="/images/home/activity/comunity.svg"  />
                    <div class="text">
                        <h4>Sharing Session</h4>
                        <p>Berbagi pengetahuan,skill & pengalaman sesama anggota FPS yang bertujuan untuk mendekatkan anggota supaya bisa bekerjasama secara teamwork ketika mendevelop sebuah produk.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activityItem">
                    <image src="/images/home/activity/bootcamp.svg"  />
                    <div class="text">
                        <h4>Startup Exhibition</h4>
                        <p>Acara pengenalan Startup anggota dan alumni FPS  untuk dipamerkan untuk kepada publik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container portofolio">
        <h2><span>|</span> Our Portofolio</h2>
        <br>
        <div class="row">
            <div class="col-md-2 startup">
                <img src="images/home/activity/card.svg" alt="">
            </div>
            <div class="col-md-2 startup">
                <img src="images/home/activity/card.svg" alt="">
            </div>
            <div class="col-md-2 startup">
                <img src="images/home/activity/card.svg" alt="">
            </div>
            <div class="col-md-2 startup">
                <img src="images/home/activity/card.svg" alt="">
            </div>
            <div class="col-md-2 startup">
                <img src="images/home/activity/card.svg" alt="">
            </div>
            <div class="col-md-2 startup">
                <img src="images/home/activity/card.svg" alt="">
            </div>
        </div>
        <br>
        <div class="explore">
            <h6>Explore More</h6>
        </div>
    </div>
</div>
@endsection
