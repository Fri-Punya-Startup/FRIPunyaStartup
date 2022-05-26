<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type FRI Punya Startup</title>
    <link rel="stylesheet" href="./css/type/styles.css">
</head>
<body>
    <div style="padding:15px;text-align:center;" class="header">
            <h1 class="hero">Type Portfolio</h1>
    </div>
    <div class="parent">
    <a href="/admin/create">
        <button class="btn btn-primary">Create</button>
    </a>
      <div class="child">
    @foreach($types as $p)
       <div class="card-wrapper">
            <div class="card">
                <img src="./images/portofolio/tes.svg" alt="/" class="responsive" >

            </div>
            <div class="text">
                    <p>{{$p->name}}</p>
            </div>
        </div>
    @endforeach
      </div> 
    </div>
</body>
</html>