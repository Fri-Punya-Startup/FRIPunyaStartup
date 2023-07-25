<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/public/css/tim2/tim2.css" />
    <script src="https://kit.fontawesome.com/a1b53e9e69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <title>Belum Punya Team</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-body-tertiary" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <img src="images/logoIdeaforge.png" width="70" alt="">
            </div>
                
            <div class="list-group list-group-flush my-3 text-center">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="bi bi-grid-fill me-2"></i>Home</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa fa-user-group me-2"></i>Team</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa fa-rocket me-2"></i>Startup</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa-solid fa-user me-2"></i>Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger"><i
                        class="fa fa-right-from-bracket me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="container-fluid">

                    <div class="d-flex">
                        <i class="fa-solid fa-bars primary-text fs-5 me-3" id="menu-toggle"></i>
                        <h2 class="fs-5 fw-bold primary-text">Team</h2>
                    </div>
                    

                    <div class="side-profile justify-content-end mt-4">
                        <a class="navbar-brand" href="#">
                          <img src="/images/" alt="Logo" width="40"  class="profile-image d-inline-block align-text-top rounded-circle article-img">
                          <h6 class="profile-name d-inline fw-semibold">Bagus Satrio</h6>
                          <p class="profile-email text-email d-block">bagus@gmail.com</p>
                        </a>
                    </div>
                </div>

                

            </nav>
 
            <div class="container-fluid px-4">

                <div class="row row-cols-1 row-cols-md-3 g-sm-4">

                    <div class="col">
                        <div class="card h-100 text-center shadow border-0">
                            <img src="images/kiri.png" class="card-img-kiri" data-bs-toggle="modal" data-bs-target="#modalKiri" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">KIRI</h5>
                                <p class="second-text fw-medium">Transportasi Publik</p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal KIRI -->
                    <div class="modal fade" id="modalKiri" tabindex="-1" aria-labelledby="modalKiri" aria-hidden="true">
                        <div class="modal-dialog ">
                          <div class="modal-content">
                            <div class="modal-header">
                                <img src="images/kiri.png" width="80" alt="" class="">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h2 class="card-title-startup text-center fw-bold">KIRI</h2>
                              <h6 class="fw-medium text-center second-text">Founder: Farhan Pratama</h6>
                              <h6 class="fw-bold mt-4 p-2">Type: Transportasi Publik</h6>
                              <p class="p-2">Kiri merupakan startup yang bergerak di bidang transportasi publik dengan tujuan menciptakan transportasi publik yang aman, nyaman, dan mudah diakses oleh masyarakat</p>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 text-center shadow border-0">
                            <img src="images/feelsbox.png" class="card-img mb-5 mt-5" data-bs-toggle="modal" data-bs-target="#modalFeelsbox" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">FEELSBOX</h5>
                                <p class="second-text fw-medium mb-4">Kesehatan Mental</p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal FEELSBOX -->
                    <div class="modal fade" id="modalFeelsbox" tabindex="-1" aria-labelledby="modalFeelsbox" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <img src="images/feelsbox.png" width="60" alt="" class="">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h2 class="card-title-startup-feelsbox text-center fw-bold">FEELSBOX</h2>
                              <h6 class="fw-medium text-center second-text">Founder: Muhammad Fathi Rabbani</h6>
                              <h6 class="fw-bold mt-4 p-2">Type: Kesehatan Mental</h6>
                              <p class="text p-2">Feelsbox merupakan platform layanan kesehatan mental untuk usia remaja. Layanan kami meliputi konseling, mentoring, self-tracking, hingga coaching</p>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 text-center shadow border-0">
                            <img src="images/sportgather.png" class="card-img-kiri" data-bs-toggle="modal" data-bs-target="#modalSportgather" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">SPORTGATHER</h5>
                                <p class="second-text fw-medium">Olahraga</p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal SPORTGATHER -->
                    <div class="modal fade" id="modalSportgather" tabindex="-1" aria-labelledby="modalSportgather" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <img src="images/sportgather.png" width="80" alt="" class="">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h2 class="card-title-startup text-center fw-bold">SPORTGATHER</h2>
                              <h6 class="fw-medium text-center second-text">Founder: Kemal Aziz</h6>
                              <h6 class="fw-bold mt-4 p-2">Type: Olahraga</h6>
                              <p class="p-2">Sportgather merupakan platform digital olahraga yang mewadahi para penggiat olahraga untuk dapat menentukan jadwal tanding, menemukan lawan tanding, serta memberikan rekomendasi venue olahraga</p>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 text-center shadow border-0">
                            <img src="images/kiri.png" class="card-img-kiri" data-bs-toggle="modal" data-bs-target="#modalKiri" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">KIRI</h5>
                                <p class="second-text fw-medium">Kesehatan Mental</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 text-center shadow border-0">
                            <img src="images/feelsbox.png" class="card-img mb-5 mt-5" data-bs-toggle="modal" data-bs-target="#modalFeelsbox" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">FEELSBOX</h5>
                                <p class="second-text fw-medium">Transportasi Publik</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 text-center shadow border-0">
                            <img src="images/sportgather.png" class="card-img-kiri" data-bs-toggle="modal" data-bs-target="#modalSportgather" alt="">
                            <div class="card-body">
                                <h5 class="fw-bold">SPORTGATHER</h5>
                                <p class="second-text fw-medium">Olahraga</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>