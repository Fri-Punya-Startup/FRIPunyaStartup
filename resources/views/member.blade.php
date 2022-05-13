@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="./css/member/styles.css">
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
        <main>
            <div class="parent">
            <div class="sidebar">
                <a class="active" href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
                <div class="child">
                        <h5 class="caption">MEMBER</h5>
                        <div class="table-content">
                            <table>
                                <div class="find">
                                    <form action="">
                                        <div class="form-input">
                                            <label class="label" for="Nama">Nama</label><br>
                                            <input
                                            type="text"
                                            id="Nama"
                                            class="text-input"
                                            autocomplete="off"
                                            placeholder="Input here..."
                                            required
                                            />
                                        </div>
                                    </form>
                                    <form action="" method="get">
                                        <div class="form-input">
                                            <label class="label" for="Nama">NIM</label><br>
                                            <input
                                            type="text"
                                            id="Nama"
                                            class="text-input"
                                            autocomplete="off"
                                            placeholder="Input here..."
                                            required
                                             />     
                                        </div>
                                    </form>
                                    <div class="custom-select" style="width:200px;">
                                        <select>
                                            <option value="0">JABATAN</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                        </select>
                                    </div>
                                    <div class="btn">
                                        <input type="button" value="Find">
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">JABATAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td data-label="NO">1</td>
                                    <td data-label="NIM">1202213033</td>
                                    <td data-label="NAMA">shalex</td>
                                    <td data-label="EMAIL">shalexander09@gmail.com</td>
                                    <td data-label="JABATAN">CTO</td>
                                    </tr>  
                                </tbody>      
                            </table>
                            <div class="btn-bottom">
                                <input type="button" value="Add member">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./js/member/app.js"></script>
</body>
</html>
@endsection
