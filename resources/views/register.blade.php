
@extends("layouts.main")

@section('content')

<head>
    <title>registration form</title>
    <link rel="stylesheet" href="./css/form/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        
        .invalid-error{
            color: red;     
        }

        .fade-in {
            animation: fadeIn 1s;
        }

        .fade-out{
            animation: fadeOut 1s;
        }

        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; }  
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>

</head>
<body>
    <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="header">
        <h1 class="hero text-light">Register Form</h1>
    </div>
    <div class="story">
        <div class="form">
            <h2 class="form-header">Join Us</h2>
            <form action="/register" method="post" enctype="multipart/form-data">
                @csrf

                {{-- form nama --}}
                <label for="email"><h5>Nama</h5></abbr></label><br> 
                @error('name')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" id="mail" name="name" placeholder="Masukan Nama"  @error('name')is-invalid @enderror value="{{ old('name') }}">
                
                {{-- form email --}}
                <label for="username"><h5>Email</h5></label>
                @error('email')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" id="mail" name="email" placeholder="Masukan Alamat Email"  @error('email')is-invalid @enderror  value="{{ old('email') }}"><br>
                <br>

                <label for="username"><h5>No Hp</h5></label>
                @error('no_hp')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <br>
                <input type="number" id="no_hp" name="no_hp" placeholder="Masukan No Hp"  @error('no_hp')is-invalid @enderror  value="{{ old('no_hp') }}"><br>
                <br>

                {{-- form alasan --}}
                <label for="alasan"><h5>Alasan mengikuti FPS</h5></label>
                @error('alasan')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" id="alasan" name="alasan" placeholder="Masukan Alasan Mengikuti FPS" @error('alasan')is-invalid @enderror  value="{{ old('alasan') }}"><br>
                <br>

                {{-- form harapan--}}
                <label for="harapan"> <h5>Harapan Mengikuti FPS</h5></label>
                @error('harapan')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" id="harapan" name="harapan" placeholder="Masukan Harapan Mengikuti FPS" @error('harapan') is-invalid @enderror  value="{{ old('harapan') }}"><br>
                <br>

                {{-- form role --}}
                <label for="role"><h5>Pilih Role Mu</h5></label><br>
                @error('role')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="radio" name="role" value="Hustler" id="hustler">
                <label for="hustler"><p>Hustler</p></label>
                <input type="radio" name="role" value="Hacker" id="hacker">
                <label for="hustler"><p>Hacker</p></label>
                <input type="radio" name="role" id="hipster" value="Hispster">
                <label for="hipster"><p>Hipster</p></label>

                <div id="list-hustler" style='display:none;'>
                    <label for="list-hustler"><h5>Pilih Skill Hustler mu</h5></label>
                    @error('skill')
                    <div class="invalid-error">
                        {{ $message }}
                    </div>
                    @enderror
                    <br>

                    <input type="radio" name="skill" id="" value="Bussines Development">
                    <label for="Bussines Development">Bussines Development</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Product Management">
                    <label for="Product Management">Product Management</label>
                    <br>

                    <input type="radio" name="skill" id="" value="BMC">
                    <label for="BMC">BMC</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Digital Marketing">
                    <label for="Digital Marketing">Digital Marketing</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Other">
                    <label for="Other">Other</label>
                    <br>
                </div>

                <div id="list-hacker" style='display:none;'>
                    <label for="list-hacker"><h5>Pilih Skill Hacker mu</h5></label>
                    @error('skill')
                    <div class="invalid-error">
                        {{ $message }}
                    </div>
                    @enderror
                    <br>

                    <input type="radio" name="skill" id="" value="FrontEnd">
                    <label for="FrontEnd">FrontEnd</label>
                    <br>

                    <input type="radio" name="skill" id="" value="BackEnd">
                    <label for="BackEnd">BackEnd</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Devops">
                    <label for="Devops">Devops</label>
                    <br>

                    <input type="radio" name="skill" id="" value="FullStack">
                    <label for="FullStack">FullStack</label>
                    <br>

                    <input type="radio" name="skill" id="" value="MobileDev">
                    <label for="MobileDev">MobileDev</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Network Engginer">
                    <label for="Network Engginer">Network Engginer</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Other">
                    <label for="Other">Other</label>
                    <br>

                </div>
                
                <div id="list-hipster" style='display:none;'>
                    <label for="list-hipster"><h5>Pilih Skill hipster mu</h5></label>
                    @error('skill')
                    <div class="invalid-error">
                        {{ $message }}
                    </div>
                    @enderror
                    <br>

                    <input type="radio" name="skill" id="" value="UI">
                    <label for="UI">UI</label>
                    <br>

                    <input type="radio" name="skill" id="" value="UX">
                    <label for="UX">UX</label>
                    <br>

                    <input type="radio" name="skill" id="" value="UX Writer">
                    <label for="UX Writer">UX Writer</label>
                    <br>

                    <input type="radio" name="skill" id="" value="UX Researcher">
                    <label for="UX Researcher">UX Researcher</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Product Designer">
                    <label for="Product Designer">Product Designer</label>
                    <br>

                    <input type="radio" name="skill" id="" value="Other">
                    <label for="Other">Other</label>
                    <br>
                </div>
                <br>
                <br>

                {{-- form Startup--}}
                <label for="startup"> <h5>Apakah Sudah Punya Startup?</h5></label>
                <p>Jika iya apa namanya jika tidak isi (-)</p>
                @error('startup')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" id="startup" name="startup" placeholder="Masukan Nama Startup" @error('startup') is-invalid @enderror  value="{{ old('startup') }}"><br>
                <br>
                
                {{-- form cv--}}
                <label for="cv"> <h5>Masukan CV Kreatif mu</h5></label><br> 
                <p>file berupa pdf</p>
                @error('cv')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                <input type="file" id="cv" name="cv" placeholder="Masukan CV" @error('alasan') is-invalid @enderror  value="{{ old('cv') }}"><br>
                <br>

                {{-- form follow--}}
                <label for="follow"> <h5>Apakah sudah memfolow ig @fps.telkom</h5></label>
                @error('follow')
                <div class="invalid-error">
                    {{ $message }}
                </div>
                @enderror
                    <br>
                    <input type="radio" name="follow" value="1">
                    <label for="ya">Ya</label>
                    <input type="radio" name="follow" value="0">
                    <label for="tidak">Tidak</label>
                <br>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script src="{{asset('js/registration.js')}}"></script>
 <script src="{{asset('js/validation.js')}}"></script>
</body>
</html>
@endsection
