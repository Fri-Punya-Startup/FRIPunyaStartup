<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($porto as $p)
        <a href="/portofolio/{{$p->product}}"><h2>{{$p->product}}</h2></a>
        <p>{{$p->type->name}}</p>
    @endforeach
</body>
</html>