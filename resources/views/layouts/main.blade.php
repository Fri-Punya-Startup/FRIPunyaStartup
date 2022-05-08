<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fri Punya Startup</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Open+Sans&family=Poppins:ital@1&display=swap" rel="stylesheet" />
    
    <!-- <link rel="stylesheet" href="/css/navbar/navbar.css"> -->
    <link rel="stylesheet" href="../css/footer/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/navbar/navbar.css">

    <style>
      .content{
        margin-top: -80px;
        position: relative;
        z-index: 1;
      }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="/">
    <img src="/images/logoNavbar.svg" width="300" height="100" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="menus navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="asu nav-link" href="#">Menu</a>
      </li>
      <li class="nav-item">
        <a class="asu nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="asu nav-link" href="/portofolio">Our Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="asu nav-link" href="/type">Type Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="asu nav-link" href="#">Our Activites</a>
      </li>  
      <li class="nav-item registers">
        <a class="nav-link " href="/login"> Login </a>
      </li>
      <li class="nav-item contactUs">
        <a class="nav-link " href="#"> Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="content">
    @yield('content')
  </div>
  
  <div class="footer">
                <div class="containerFooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ready">
                                <h3>Ready to improve your Startup?</h3>
                                <h5>Let's join us!</h5>
                            </div>
                            <div class="col-md-6" >
                                <div class="register">
                                    <h5>Register Now!</h5>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="contact">
                    <Image src="/images/footer/fps-white.svg" width="120" height="120" />
                    <h6 class="ijo">FRI Punya Startup</h6>
                    <br>
                    <h6>Bandung</h6>
                    <h6>Fakultas Rekayasa Industri</h6>
                    <h6>Telkom University</h6>
                    <br/>
                    <div class="contactInfo">
                      <a  href="#">
                          <Image class="medsos" src="/images/footer/discord.svg" width="50" height="50"/>
                      </a>

                      <a  href="#">
                          <Image class="medsos" src="/images/footer/instagram.svg" width="50" height="50"/>
                      </a>    
                
                      <a  href="#">
                          <Image class="medsos" src="/images/footer/facebook.svg" width="50" height="50"/>
                      </a>                  
                
                      <a  href="#">
                          <Image class="medsos" src="/images/footer/linkedin.svg" width="50" height="50"/>
                      </a>
                        
                    </div>
                    <br/>
                    <h6>Copyright FPS Telkom, All Right Reserved</h6>
                </div>
            </div>
    <!-- Optional JavaScript; choose one of the two! -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>

