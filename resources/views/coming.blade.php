@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link rel="stylesheet" href="./css/coming.css">
</head>
<body>
<div class="header">
            <div class="hero">
                <h1>Bootcamp</h1>
            </div>
         </div>
         <div class="story">
             <div class="card"> 
                 <div class="column">
                     <div>
                        <h2>On Progress...</h2>   
                        <h6>Coming soon!</h6>
                     </div>
                     <div class="col12">
                        <h7>We are still preparing what is the best for you all.</h7>
                        <a class='text-light' href='#'>Remind me if it's ready</a>
                     </div>   
                 </div>
                 <div class="imageColumn">
                     <div>  
                       <Image src="./images/comingSoon.svg" style="max-width:100%;height:auto;" class="image" />
                     </div>
                 </div>
             </div>
         </div>
</body>
</html>
@endsection