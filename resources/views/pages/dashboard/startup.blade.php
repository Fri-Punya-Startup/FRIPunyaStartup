<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href=".public/css/startup/startup.css" />
    <script src="https://kit.fontawesome.com/a1b53e9e69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <title>Startup</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-body-tertiary" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <img src="images/logoIdeaforge.png" width="70" alt="">
            </div>
                
            <div class="list-group list-group-flush my-3 text-center">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="bi bi-grid-fill me-2"></i>Home</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fa fa-user-group me-2"></i>Team</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                    <h2 class="fs-5 fw-bold m-0 ms-3">Startup</h2>
                </div>

                <div class="side-profile row">
                    <div class="col-3 justify-content-end">
                        <img class="rounded-circle article-img" src="images/.jpeg" width="40" id="img"> 
                    </div>
                    <div class="text-profile col">
                        <h3 class="second-text fw-bold fs-6">Bagus Satrio</h3> <br> 
                        <p class="text-gmail">bagus@gmail.com</p>
                    </div>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <div class="main-content row my-4 gap-3">

                    <div class="mb-3">
                        <label for="inputNamaStartup" class="form-label fw-semibold">Nama Startup</label>
                        <input type="text" class="form-control" id="inputNamaStartup" placeholder="Inputkan nama startupmu disini">
                    </div>
                    <div class="mb-3">
                        <label for="inputDeskripsi" class="form-label fw-semibold">Deskripsi Startup</label>
                        <textarea class="form-control" id="inputDeskripsi" placeholder="Tuliskan deskripsi startupmu disini " rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputKategori" class="form-label fw-semibold">Kategori Startup</label>
                        <input type="text" class="form-control" id="inputKategori" placeholder="Inputkan kategori startupmu disini ">
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