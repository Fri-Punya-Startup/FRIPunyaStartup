@extends("layouts.main")

@section('content')
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/penjelasan/penjelasan.css">
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
            <h1 class="us">Ideaforge</h1>
        </div>
    </div>
    <div class="container mt-5 mb-5 d-flex flex-column gap-5">
      <div>
          <span>
            IdeaForge by FPS adalah wadah bagi para startup enthusiast untuk
            menginisiasikan ide startup mereka menuju mvp. IdeaForge ini
            merupakan tempat pengasahan ide sebelum masuk fase inkubasi atau
            bisa disebut fase ideation.
          </span>
          <br />
          <br />
          <span>
            IdeaForge menyediakan tiga mentor bagi peserta yang ingin
            mengajukan pertanyaan seputar ide, sistem, desain, dan lain-lain.
            Mentor-mentor ini akan tersedia melalui platform Discord dan akan
            sesuai dengan peran mereka sebagai hacker, hustler, dan hipster.
            Selama IdeaForge berlangsung, peserta diperbolehkan untuk
            mengajukan pertanyaan dan mendapatkan bimbingan bersama mentor
            yang telah disediakan.
          </span>
          <br />
          <br />
          <span>
            IdeaForge akan diakhiri dengan para peserta mempresentasikan
            produk mereka pada acara demoday atau pitchday, yang akan dinilai
            oleh juri yang tersedia.
          </span>
      </div>
      <div class='row d-flex flex-column gap-5'>
        <div class="col">
          <div class="frame-prosesteknologi">
            <div class="title ">
              <img src="images/line3.png"class="line3"/>
              <span class="title-text">
                Proses Teknologi
              </span>
            </div>
            <div class="prosesdesain-card">
              <span class="prosesdesain-card-text">
                  Pengembangan platform dan infrastruktur teknologi yang
                  dibutuhkan dalam bisnis
              </span>
            </div>
            <div class="prosesdesain-card">
              <span class="prosesdesain-card-text">
                  Pemilihan teknologi yang tepat untuk mendukung bisnis yang
                  dijalankan.
              </span>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="frame-prosesdesain ">
            <div class="title">
                <img
                  src="images/line3.png"
                  class="line3"
                />
                <span class="title-text">
                  Proses Desain
                </span>
            </div>
            <div class="prosesdesain-card">
              <span class="prosesdesain-card-text">
                Pengembangan konsep desain yang tepat
              </span>
            </div>
            <div class="prosesdesain-card">
                <span class="prosesdesain-card-text">
                    Desain prosuk atau layanan, desain websie atau aplikasi,
                    desain branding, serta pengembangan strategi desain yang
                    menarik dan efektif
                </span>
            </div>
        </div>
      </div>
      <div class="ourboard-frame">
          <div class="title">
            <img
              src="images/line3.png"
              class="line3"
            />
            <span class="title-text">
              <span>Our Board of Director</span>
            </span>
          </div>
          <div class="ourboard-row">
            <div class="ourboard-card">
                <span class="ourboard-text">
                  Meningkatkan kreativitas dan inovasi
                </span>
            </div>
            <div class="ourboard-card">
                <span class="ourboard-text1">
                 Membuat ide bisnis menjadi produk yang siap
                </span>
            </div>
            <div class="ourboard-card">
                <span class="ourboard-text2">
                  Meningkatkan pemahaman
                </span>
            </div>
            <div class="ourboard-card">
              <div class="ourboard-card-description">
                <span class="ourboard-text3">
               Meningkatkan keterampilan dan keahlian
              </div>
            </div>
            <div class="ourboard-card">
              <div class="ourboard-card-description">
                <span class="ourboard-text4">
              Meningkatkan jaringan bisnis dan menjalin kemitraan
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</body>
@endsection
