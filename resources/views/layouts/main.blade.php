<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FRI Punya Startup</title>

    <title>Fri Punya Startup</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Open+Sans&family=Poppins:ital@1&display=swap" rel="stylesheet" />
    
    <!-- <link rel="stylesheet" href="/css/navbar/navbar.css"> -->
    <link rel="stylesheet" href="../css/footer/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/navbar/navbar.css">
    
    <style>
      /* .content{
        margin-top: -80px;
        position: relative;
        z-index: 1;
      } */
    </style>

</head>
<body>
  <nav>
     <div class="parent">
       <div class="navbar-container">
        <div class="img-container">
          <img src="/images/logoNavbar.svg" alt="/" class="responsive">
        </div>
        <div class="menu-container" id="mySidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="/">Menu</a>
          <a href="/about">About Us</a>
          <a href="/portofolio">Our Portfolio</a>
          <a href="/type">Type Portfolio</a>
          <a href="/">Our Activites</a>
          <div class="button">
            <a href="/login" class="btnOne">Login</a>
            <a href="/" class="btnTwo">Contact Us</a>
          </div>
        </div>
        <span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
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
                                <a href="/register">
                                  <div class="register">
                                    <h5>Register Now!</h5>
                                  </div>
                                </a>
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
  <script src="./js/navbar/navbar.js"></script>
  </body>
</html>

