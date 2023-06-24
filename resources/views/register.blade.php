<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Ideaforge</title>
    <link rel="stylesheet" href="./css/registration/registration.css" />
  </head>
  <body>

    <section class="container">
        <nav>
          <div class="parent">
            <div class="title-container">
              <div class="img-ideaforge">
                <img src="images/logoIdeaforge.png" alt="" width="70" height="70" class="responsive">
              </div>
              <p>Registration</p>
            </div>
            <p><span class="sub-title">Home > Ideaforge > Registration</span></p>
            <div class="navbar-container">
             <div class="img-container">
               <a href="/">
                 <img src="/images/logoNavbar.svg" alt="" class="responsive">
               </a>
             </div>
             <div class="menu-container">
               <a href="/home">Home</a>
               <a href="/team">Team</a>
               <a href="/startup">Startup</a>
               <a href="/profile">Profile</a>
               <div class="button">
                 <a href="/login" class="btnOne">Register</a>
                 <a href="/#contact" class="btnTwo">Contact Us</a>
               </div>
          </div>
       </nav>

      <header>Registration Ideaforge</header>
      <form action="/register" class="form" method="POST">
        @csrf
        <div class="input-box">
          <label>Email</label>
          <input type="text" placeholder=" Input Here" required />
        </div>
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder=" Input Here" required />
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="text" placeholder=" Input Here" required />
          </div>
          <div class="input-box">
            <label>Nomor Whatsapp</label>
            <input type="number" placeholder=" Input Here" required />
          </div>

        <div class="role-box">
          <h3>Role</h3>
          <div class="role-option">
            <div class="role">
              <input type="radio" id="check-hustler" name="role" required/>
              <label for="check-hustler">Hustler</label>
            </div>
            <div class="role">
              <input type="radio" id="check-hipster" name="role" required/>
              <label for="check-hipster">Hipster</label>
            </div>
            <div class="role">
              <input type="radio" id="check-hacker" name="role" required/>
              <label for="check-hacker">Hacker</label>
            </div>
        </div>

        <div class="role-box">
            <h3>Sudah ada startup?</h3>
            <div class="role-option">
              <div class="startup">
                <input type="checkbox" id="check-startup" name="startup" unchecked />
                <label for="check-startup">Sudah</label>
              </div>
          </div>
        </div>

        <div class="input-box" id="additional-input" style="display: none;">
            <label>Nama Startup</label>
            <input type="text" id="additional-input-field" name="additional-input" placeholder="Input Here">

            <div class="input-box">
              <label>Deskripsi Startup</label>
              <input type="text" id="additional-input-field" name="additional-input" placeholder="Input Here">
            </div>
        </div>
        <div class="input-box">
            <label>Kode Refferal</label>
            <input type="text" placeholder="Input Here" required />
          </div>
        <a href="/submit"><button>Submit</button></a>
      </form>
    </section>
    <script src="{{ asset('./js/registration.js') }}"></script>
  </body>
</html>
