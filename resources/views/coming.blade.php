@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link rel="stylesheet" href="./css/coming/style.css">
</head>
<body>
         <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="header">
            <h1 class="hero">Bootcamp</h1>
         </div>
         <div class="story">
            <div class="card">
                <div style="overflow:auto" class="column">
                    <div class="main">
                        <div>
                            <h2>On Progress...</h2>   
                            <h6>Coming soon!</h6>
                        </div>
                        <div class="col12">
                            <h7>We are still preparing what is the best for you all.</h7>
                            <a class='text-light' href='#'>Remind me if it's ready</a>
                        </div>      
                    </div>

                    <div class="right">
                        <img src="./images/comingSoon.svg" style="max-width:100%;height:auto;">
                    </div>
                </div>
           </div>
         </div>
</body>
</html>
@endsection