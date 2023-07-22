<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/login/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
      <div class="container-fluid ps-md-0">
        <div class="row">

          <!-- Left Page -->
          <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box" style="background: #23235B;">
                <div class="featured-image mb-3">
                 <img src="/public/images/imageLogin.svg" class="img-fluid" width="300">
                </div>
                <p class="text-title text-white fw-semibold text-center">Empowering Innovation, <br> Shaping the Future</p>
                <p class="sub-title second-title fw-light text-white text-wrap text-center">We can start empowering <br> innovation from now </>
          </div> 

          <!-- Right Page -->
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="left-page col-ms-9 col-lg-8 mx-auto">
                    <div class="mb-4 text-center">
                      <img src="/public/images/ideaforgeXfps.svg" alt="" width="200" class="ideaforgeXfps">
                      <h5 class="login-heading mb-3 mt-4 fw-bold">Welcome Back!</h5>
                      <p class="text-login second-text">Sign in with your email and password <br> or continue with google account</p>
                    </div>
                    
                    
                    <!-- Sign In Form -->
                    <form class="form-input text-center mx-auto">
                      <div class="mb-3 input-group">
                        <input type="email" class="form-control form-control-sm fw-medium secondary-bg second-text" id="emailInput" placeholder="Email">
                        <label for="emailInput" class="input-group-text secondary-bg">
                          <i class="fa-regular fa-envelope fa-lg"></i>
                        </label>
                      </div>
                    
                      <div class="mb-3 input-group">
                        <input type="password" class="form-control form-control-sm fw-medium secondary-bg second-text" id="passwordInput" placeholder="Password">
                        <label for="passwordInput" class="input-group-text secondary-bg">
                          <i class="fa fa-lg fa-key fa-rotate-180"></i>
                        </label>
                      </div>

                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                        <label class="remember-me form-check-label second-text" for="rememberPasswordCheck">Remember me</label>
                        <a href="#" class="forgot-password primary-text fw-medium">Forgot Password</a>
                      </div>
                      
                      <div class="button-login d-grid">
                        <button class="btn btn-lg btn-primary text-white btn-login fw-bold" type="submit">Login</button>
                        <div class="text-center">
                        </div>
                      </div>

                      <div class="sign-up d-grid">
                        <p class="second-text">Don't have an account? <a href="" class="primary-text fw-medium">Sign Up</a></p>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a1b53e9e69.js" crossorigin="anonymous"></script>
</body>
</html>

