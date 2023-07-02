<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=".css/registration/registration.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <title>Registration Ideaforge</title>
  </head>
  <body>
    <section class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src=".images/logoNavbar.svg" alt="" width="250">
          </a>
          <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarNavAltMarkup"
            >
              <div class="nav nav-pills">
                <a class="nav-link text-white" href="#">Home</a>
                <a class="nav-link text-white" href="#">About Us</a>
                <a class="nav-link text-white" href="#">Our Portfolio</a>
                <a class="nav-link text-white" href="#">Our Activites</a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="#" class="">
                    <button class="btn btn-outline-warning me-md-2 bg-white" type="button">Register</button>
                  </a>
                  <a href="#" class="">
                    <button class="button-contact btn btn-primary" type="button">Contact Us</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="title-container mb-2 mt-2">
          <p>Registration Form</p>
        </div>
      </div>
    </section>

    <section class="content p-4 ms-4">
        <h1 class="title-form fs-2 mb-4 fw-bold">Join Us</h1>
          <form>
            <div class="mb-3 ">
              <label for="InputEmail" class="form-label fw-semibold text-body-tertiary">Email address</label>
              <input type="email" class="form-control" id="InputEmail" placeholder=" Input Here" required>
            </div>
            <div class="mb-3">
              <label for="InputFullName" class="form-label fw-semibold text-body-tertiary">Full Name</label>
              <input type="text" class="form-control" id="InputFullName" placeholder=" Input Here" required>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label fw-semibold text-body-tertiary">Password</label>
                <input type="password" class="form-control" id="InputPassword" placeholder=" Input Here" required>
            </div>
            <div class="mb-3">
                <label for="InputNomerWhatsapp" class="form-label fw-semibold text-body-tertiary">Nomer Whatsapp</label>
                <input type="number" class="form-control" id="InputNomerWhatsapp" placeholder=" Input Here" required>
            </div>

            <p class="fw-semibold mt-3 text-body-tertiary">Role</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                <label class="form-check-label" for="inlineRadio1">Hustler</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                <label class="form-check-label" for="inlineRadio2">Hipster</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" required>
                <label class="form-check-label" for="inlineRadio3">Hacker</label>
            </div>

            <p class="fw-semibold mt-3 text-body-tertiary">Sudah Ada Startup?</p>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check-startup" unchecked required>
                <label class="form-check-label" for="check-startup">Sudah</label>
            </div>
            <div class="mb-3" id="additional-input" style="display: none;">
                <label for="InputNamaStartup" class="form-label fw-semibold text-body-tertiary">Nama Startup</label>
                <input type="text" class="form-control" id="additional-input-field" name="additional-input" placeholder="Input Here" required>

                <div class="mt-2">
                  <label for="InputDeskripsi" class="form-label fw-semibold text-body-tertiary">Deskripsi Singkat Startup</label>
                  <textarea class="form-control" id="additional-input-field" name="additional-input" rows="4"></textarea>
                </div>

                <p class="fw-semibold mt-3 text-body-tertiary">Yakin?</p>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check-startup" unchecked required>
                    <label class="form-check-label " for="check-startup ">Yakin</label>
                </div>
            </div>
            <div class="submitButton">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Submit
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="submitModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="submitModal">Announcement</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Halo <span class="namaStartup">Feelsbox</span> Selamat datang! <br> <p></p>
                      Berikut diinformasikan kode referal yang berfungsi untuk<br>
                      mengenerate agar anggota tim kamu bisa masuk<br>
                      ke dalam tim. <br> <p></p>
                      <span class="kodeReferal">INIKODEREFERAL</span> <p></p>
                      Terima Kasih!
                    </div>
                    <div class="modal-footer">
                      <a href="#submit"><button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" >Oke</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </section>
    
    <footer>
      <div class="card">
        <div class="card-footer-body text-white">
          <h5 class="card-title-footer fw-bold">Ready to improve your Startup?</h5>
          <p class="card-text-footer fw-medium">Let's Join Us</p>
        </div>
      </div>
    </footer>

    <footer class="footer">
        <div class="container p-4 pb-0">
          <div class="footer-location">
            <img src="images/fpsLogoFooter2.svg" alt="">
            <h6 class="footer-title">FRI Punya Startup</h6>
            <p class="footer-text">
              Bandung,<br>           
              Fakultas Rekayasa Industri <br>
              Telkom University
            </p>
        </div>
    
        <section class="mt-4 mb-1 text-center">
          <a
           class="btn btn-outline-light btn-floating m-1"
           href="#"
           role="button"
           ><i class="bi bi-discord"></i
          ></a>
          <a
           class="btn btn-outline-light btn-floating m-1"
           href="#"
           role="button"
           ><i class="fa fa-instagram"></i
          ></a>
          <a
           class="btn btn-outline-light btn-floating m-1"
           href="#"
           role="button"
           ><i class="fa fa-facebook"></i
          ></a>
          <a
           class="btn btn-outline-light btn-floating m-1"
           href="#"
           role="button"
           ><i class="fa fa-linkedin"></i
          ></a>
        </section>
    
          <div class="copyright-text text-center p-1 mb-6">
           <p>Copyright FPS Telkom, All Right Reserved</p>
          </div>
        </footer>
        
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
