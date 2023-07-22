<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./css/tim1/sudahpunyatim.css"/>
    <script src="https://kit.fontawesome.com/a1b53e9e69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <title>sudah punya team</title>
    
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-body-tertiary" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <img src="images/team1/ideaforge.png" width="70" alt="">
            </div>
                
            <div class="list-group list-group-flush my-3 text-center">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="bi bi-grid-fill me-2"></i>Home</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars primary-text fs-5 me-3" id="menu-toggle"></i>
                    <h2 class="fs-5 fw-bold m-0 ms-3">Team</h2>
                </div>

                <div class="side-profile row ms-auto">
                    <div class="col-3 justify-content-end ms-auto">
                        <img class="rounded-circle article-img" src="images/team1/profile-pict.png" width="40" id="img"> 
                    </div>
                    <div class="text-profile col">
                        <h3 class="second-text fw-bold fs-6">Bagus Satrio</h3> <br> 
                        <p class="text-gmail">bagus@gmail.com</p>
                    </div>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col text-start">
                        <h2 class="fs-5 fw-bold mb-3 mt-4">Nama Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="card cardketua shadow ">
                            <div class="card-body cardbody-ketua">
                                <img class="card-image rounded-circle article-img mx-auto" src="images/team1/ketua.png" id="">
                                <h5 class="card-title fw-bold fs-6 text-center">Bagus Satrio</h5>
                                <p class="card-text text-center">Ketua</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 justify-content-center text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <img class="card-image rounded-circle article-img" src="images/team1/anggota1.png" id="img">
                                <h5 class="card-title fw-bold fs-6">Bagus Satrio</h5>
                                <p class="card-text">Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-center text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <img class="card-image rounded-circle article-img" src="images/team1/anggota2.png" id="">
                                <h5 class="card-title fw-bold fs-6">Bagus Satrio</h5>
                                <p class="card-text">Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-center text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <img class="card-image rounded-circle article-img" src="images/team1/anggota3.png" id="">
                                <h5 class="card-title fw-bold fs-6">Bagus Satrio</h5>
                                <p class="card-text">Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-center text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <img class="card-image rounded-circle article-img" src="images/team1/anggota4.png" id="">
                                <h5 class="card-title fw-bold fs-6">Bagus Satrio</h5>
                                <p class="card-text">Anggota</p>
                            </div>
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