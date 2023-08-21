@extends("layouts.main")

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/registration/registration.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"/>
</head>

<style>
    /* Gaya untuk memunculkan modal */
    #exampleModalCenter {
    display: block; /* Munculkan modal */
    background: rgba(0, 0, 0, 0.5); /* Warna latar belakang semi-transparan */
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999; /* Mengatur urutan tampilan di atas elemen lain */
    visibility: visible;
    }

    .modal-dialog {
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .modal-content {
    max-width: 600px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 10px;
    }

    .modal-title {
    font-size: 20px;
    margin: 0;
    }

    .modal-body {
    margin-bottom: 20px;
    }

    .modal-footer {
    display: flex;
    justify-content: flex-end;
    }

    /* Gaya untuk menghilangkan modal */
    #exampleModalCenter:target {
    display: none; /* Sembunyikan modal saat tidak di-target */
    }

    .btn-dashboard{
        width: 100px !important;
    }
</style>


<body>
    <div class="header">
        <div class="container">
            <h1 class=""><span> </span> Register Ideaforge</h1>
        </div>
    </div>
    <div class="container registration">
      <form action="" method="POST" class="form">
        @csrf
            <div>
            @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error')}}
              </div>
            @endif
          </div>
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
              <input type="radio" id="check-hustler" name="role" value="Hustler" required/>
              <label for="check-hustler">Hustler</label>
            </div>
            <div class="role">
              <input type="radio" id="check-hipster" name="role" value="Hipster" required/>
              <label for="check-hipster">Hipster</label>
            </div>
            <div class="role">
              <input type="radio" id="check-hacker" name="role" value="Hacker" required/>
              <label for="check-hacker">Hacker</label>
            </div>
        </div>

        <div class="role-box">
            <h3>Sudah ada startup ?</h3>
            <div class="role-option">
              <div class="startup">
                <input type="checkbox" id="check-startup" name="startup" unchecked />
                <label for="check-startup">Sudah</label>
              </div>
          </div>
        </div>

        <div class="input-box" id="additional-input" style="display: none;">
            <label name="startup">Nama Startup</label>
            <input type="text" id="startup-name" name="startup" placeholder="Input Here">

            <div class="input-box">
              <label>Deskripsi Startup</label>
              <input type="text" id="startup-description" name="deskripsi" placeholder="Input Here">
            </div>
        </div>
        <div id="kode-referal" class="input-box">
            <label name="refferal"> Kode Refferal</label>
            <input id="referal" type="text" name="refferal" placeholder="Masukan kode refferal dari ketua tim untuk memasuki tim"  />
          </div>
        <a href="/submit"><button>Submit</button></a>
      </form>
    </section>

    @if(session()->has('success'))
    <!-- Modal -->
   <!-- Modal -->
    <div class="modal" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Kode Refferal </h5>
            </div>
            <div class="modal-body">
                <p>Kode berikut digunakan agar teman anda dapat bergabung ke tim mu</p>
                <h3 id="copyButton"><i class="bi bi-clipboard"></i> {{ session('success') }}</h3>
            </div>
            <div class="modal-footer">
                <a href="/dashboard"><button type="button" class="btn-dashboard btn btn-secondary" data-dismiss="modal">Dashboard</button></a>
            </div>
        </div>
        </div>
    </div>
    <!-- Letakkan skrip JavaScript di bagian bawah HTML sebelum penutup </body> -->
    <script>
        // Mengatur tindakan saat tombol "Copy" diklik
        document.getElementById("copyButton").addEventListener("click", function() {
            copyTextToClipboard("{{ session('success') }}");
        });

        // Fungsi untuk menyalin teks ke clipboard
        function copyTextToClipboard(text) {
            const tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("Berhasil di copy {{ session('success') }}");
        }
    </script>
    @endif

    <script src="{{ asset('./js/registration.js') }}"></script>
    </div>
  </div>
    </div>
</body>
@endsection
