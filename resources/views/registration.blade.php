@extends("layouts.main")

@section('content')
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="./css/registration/registration.css" />
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
            <h1 class=""><span> </span> Register Ideaforge</h1>
        </div>
    </div>
    <div class="container registration">
      <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                  {{$item}}
                </li>
            @endforeach
        </ul>
        @endif
      </div>
      <form action="" method="POST" class="form">
        @csrf
        <div class="input-box">
          <label name="email" >Email</label>
          <input type="text" name="email" placeholder="Input Here" required />
        </div>
        <div class="input-box">
          <label name="fullName" >Full Name</label>
          <input type="text" name="fullName" placeholder=" Input Here" required />
        </div>
        <div class="input-box">
            <label name="password" >Password</label>
            <input type="password" name="password" placeholder=" Input Here" required />
          </div>
          <div class="input-box">
            <label name="number" >Nomor Whatsapp</label>
            <input type="number" name="number" placeholder=" Input Here" required />
          </div>

        <div class="role-box">
          <h3>Role</h3>
          <div class="role-option">
            <div class="role">
              <input type="radio" id="check-hustler" name="role" value="1" required/>
              <label for="check-hustler">Hustler</label>
            </div>
            <div class="role">
              <input type="radio" id="check-hipster" name="role" value="2" required/>
              <label for="check-hipster">Hipster</label>
            </div>
            <div class="role">
              <input type="radio" id="check-hacker" name="role" value="3" required/>
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
            <label name="startup">Nama Startup</label>
            <input type="text" id="additional-input-field" name="startup" placeholder="Input Here">

            <div class="input-box">
              <label>Deskripsi Startup</label>
              <input type="text" id="additional-input-field" name="deskripsi" placeholder="Input Here">
            </div>
        </div>
        <div class="input-box">
            <label name="refferal"> Kode Refferal</label>
            <input type="text" name="refferal" placeholder="Opsional"  />
          </div>
        <a href="/submit"><button>Submit</button></a>
      </form>
    </section>
    <script src="{{ asset('./js/registration.js') }}"></script>
    </div>
  </div>
    </div>
</body>
@endsection
