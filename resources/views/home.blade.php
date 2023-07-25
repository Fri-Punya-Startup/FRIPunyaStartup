@extends("layouts.main")

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Work+Sans:wght@700&display=swap" rel="stylesheet">
<style>
    .col-sm img{
        width: 225px;
        height: 225px;
    }
</style>
<link rel="stylesheet" href="css/home/styles.css">
<body>
    <div class="home">
        <div class="containers home-animate">
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
            <div class="buttonHome">
                <a href="/register">
                    <button type="submit" class="button2">Register Now</button>
                </a>
            </div>
        </div>
        
        <!-- poster -->
        <div class="poster-container">
            <div class="poster-element-wrapper">
                <div class="poster-text-wrapper">
                    <div class="poster-text">
                        <h2>Siap membangun startup <br class="hidden"> yang anda impikan?</h2>
                        <img src="/images/home/particle-poster.svg" alt="" class="particle-poster-text">
                    </div>
                    <p class="poster-description">IdeaForge siap membantu mengasah dan mewujudkan ide-ide brilianmu, dengan menyediakan mentor-mentor yang terampil dan berbagai rangkaian acara yang tak akan terlupakan!</p>
                </div>
                <div class="poster-image-container">
                    <img src="/images/home/posterImage.svg" class="poster-image" alt="">
                </div>
            </div>
            <div class="element-susah">
                <img src="/images/home/poster-eclipse.svg" alt="">
            </div>
            <div class="particle-poster-element"><img src="/images/home/particle-poster.svg" alt=""></div>
        </div>

        <div class="aboutUs" id="about">
            <div class="containerAbout">
                    <div class="responsive">
                        <img src="/images/home/about.svg" width="300" height="300" />
                    </div>
                    <div class="aboutContent">
                        <h2 class="heading"><span>|</span> About Us</h2>
                        <p>
                            FPS merupakan sebuah komunitas yang dibentuk dengan tujuan berkembang dan belajar bersama 
                            dalam menciptakan sebuah ide bisnis atau startup. Anggota dapat menjalin relasi sesama 
                            anggota maupun alumni dan berkembang bersama untuk menciptakan karya - karya unggulan di 
                            bawah naungan Fakultas Rekayasa Industri. FPS menjadi sarana untuk mahasiswa FRI 
                            (Fakultas Rekayasa Industri) dalam penciptaan sebuah inovasi,karya atau ide bisnis.
                        </p>
                        <div class="more">
                            <a href="/about">
                                Read More
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="ourActivity">
            <div class="activityContent">
                <h2 class="heading"><span>|</span> Our Activity</h2>
                <div class="activityCard">
                        <div class="activityItem">
                            <image src="/images/home/activity/competion.svg" class="responsive" />
                            <div class="text">
                                <h4>Bootcamp & Workshop</h4>
                                <p>Ranah bagi anggota FPS untuk menambah insight dan knowledge baru dalam menciptakan sebuah karya atau produk.</p>
                            </div>
                        </div>
                        <div class="activityItem">
                            <image src="/images/home/activity/comunity.svg" class="responsive" /> 
                            <div class="text">
                                <h4>Sharing Session</h4>
                                <p>Berbagi pengetahuan,skill & pengalaman sesama anggota FPS yang bertujuan untuk mendekatkan anggota supaya bisa bekerjasama secara teamwork ketika mendevelop sebuah produk.</p>           
                            </div>        
                        </div>
                        <div class="activityItem">
                            <image src="/images/home/activity/bootcamp.svg"  class="responsive"/>
                            <div class="text">
                                <h4>Startup Exhibition</h4>
                                <p>Acara pengenalan Startup anggota dan alumni FPS  untuk dipamerkan untuk kepada publik.</p>
                            </div>    
                        </div>
                </div>
            </div>
        </div>

        <div id="startup" class="ourPortofolio">
            <h2 class="heading"><span>|</span> Our Startup</h2>
            <div class="row">
                <div class="col-sm text-center">
                    <a href="/startup/kiri">
                        <img src="images/kiri.png" alt="">
                    </a>
                </div>
                <div class="col-sm text-center">
                    <a href="/startup/feelsbox">
                        <img src="images/feelsbox.png" alt="">
                    </a>
                </div>
                <div class="col-sm text-center">
                    <a href="/startup/sport-gather">
                        <img src="images/sport.png" alt="">
                    </a>
                </div>
            </div>
            <br>
            {{-- <div class="explore">
                <button><h6>Explore More</h6></button>
            </div> --}}
        </div>
    </div>
    <footer>
    @endsection
    </footer>
</body>
