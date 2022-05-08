@extends("layouts.main")

@section('content')
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="./css/about/about.module.css">
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
            <h1 class="us">About Us</h1>
        </div>
    </div>
    <div class="about">
        <h1><span>|</span> Our Story</h1>
        <p>Kami bermula dari kesadaran akan banyaknya minat mahasiswa/i Fakultas Rekayasa Industri
            dalam pengembangan bisnis digital dan startup. Pada awal terbentuknya, FPS bermula sebagai 
            sebuah kompetisi startup di FRI untuk melombakan sekaligus mengembangkan startup mereka. 
            Kompetisi tersebut sudah berlangsung selama dua kali dalam kurun waktu tahun 2020 hingga 2021. 
            Pada kompetisi tersebut, kami mengundang beberapa praktisi sebagai coach yang memberikan materi 
            sekaligus melakukan penilaian kepada tim yang mengikuti FPS.</p>
        <p>Tingginya minat dan rasa ingin tahu mahasiswa/i Fakultas Rekayasa Industri terhadap dunia startup 
            membuat kami ingin melebarkan sayap untuk memperoleh peluang-peluang lain dengan mengembangkan sebuah komunitas FPS ini. 
            Sehingga saat ini FPS dapat menjadi sebuah komunitas yang dibentuk dengan tujuan berkembang dan belajar bersama dalam menciptakan 
            sebuah ide bisnis atau startup. Anggota dapat menjalin relasi sesama anggota maupun alumni dan berkembang bersama untuk 
            menciptakan karya - karya unggulan di bawah naungan Fakultas Rekayasa Industri. FPS menjadi sarana untuk mahasiswa FRI 
            (Fakultas Rekayasa Industri) dalam penciptaan sebuah inovasi,karya atau ide bisnis.</p>
        <br/><br/><br/><br/><br/>
        <div class="row">
            <div class="col-md-6">
                <h1><span>|</span> Our Vision</h1>
                <p>“Menciptakan komunitas unggul dan berprestasi dalam menciptakan sebuah karya/produk, inovasi, dan kompetisi 
                    baik di dalam kampus maupun luar kampus serta menjadi wadah dalam meningkatkan kemampuan baik hardskill 
                    maupun softskill untuk menciptakan inovasi yang unggul dan membuat dampak kepada society di Era Revolusi Industri 
                    yang terus berkembang.”</p>
            </div>
            <div class="col-md-6">
                <h1><span>|</span> Our Mission</h1>
                <ul>
                    <li>Meningkatkan kapasitas dan kapabilitas anggota FPS.</li>
                    <li>Memudahkan anggota FPS untuk menjalin kerjasama dalam menciptakan sebuah Karya,Produk, atau Inovasi.</li>
                    <li>Wadah bagi para mahasiswa FRI yang memiliki sebuah produk atau karya supaya dapat dikembangkan bersama FPS.</li>
                    <li>Wadah bagi para anggota FPS dalam menjalin relasi di dalam komunitas maupun diluar komunitas.</li>
                    <li>Melatih anggota supaya berpikir adaptif dan inovatif.</li>
                </ul>
            </div>
        </div>
        <br/><br/><br/><br/><br/>
        <h1><span>|</span> Our Board of Director</h1>
        <div class="image">
            <div class="row director">
                <div class="col-sm-2">
                    <img src="images/about/ceo.png" alt="profile Pic" height="200" width="200">
                    <h2>Kemal Aziz</h2>
                </div>
                <div class="col-sm-2">
                    <img src="images/about/coo.png" alt="profile Pic" height="200" width="200">
                    <h2>Stefanus Ricardo M</h2>
                </div>
                <div class="col-sm-2">
                    <img src="images/about/cto.png" alt="profile Pic" height="200" width="200">
                    <h2>Wahyudi Khoeris S</h2>
                </div>
                <div class="col-sm-2">
                    <img src="images/about/cmo.png" alt="profile Pic" height="200" width="200">
                    <h2>Fransiscus Michael</h2>
                </div>
                <div class="col-sm-2">
                    <img src="images/about/cfo.png" alt="profile Pic" height="200" width="200">
                    <h2>Andrian Firmansyah</h2>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection