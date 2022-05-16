<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="../css/member/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div style="padding:15px;text-align:center;" class="header">
            <h1 class="hero">ADMIN</h1>
    </div>
    <div class="mobile"> 
        <div class="mobile-parent">
            <div class="mobile-child">
                <div class="text">
                  <h6><span class="sorry">Sorry</span>,<br> You cannot access this page from mobile</h6>
                </div>
                <img src="./images/admin.svg" alt="/" class="responsive">
            </div>
        </div>
    </div>
    <div class="desktop">
        <div class="parent">
            <div class="navbar2">
                <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
                <a><i class="fa fa-sign-out"></i>Logout</i>
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="logout"></button>
                </form>
                </a>
          </div>
            @yield('content')
        </div>
    </div>
    <script src="../js/member/app.js"></script>
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>