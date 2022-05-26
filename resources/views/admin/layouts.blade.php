<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="../../css/member/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <a class="active" href="/admin/"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a href="/admin/member/"><i class="fa fa-fw "></i> Member</a> 
                <a href="type/"><i class="fa fa-fw "></i> Type</a> 
                <a href="/admin#">
                    <i class="fa fa-sign-out">Logout</i>
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="logout"></button>
                    </form>
                </a>
          </div>
            @yield('content')
        </div>
    </div>
    <script src="../../js/member/app.js"></script>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
  </body>
</html>