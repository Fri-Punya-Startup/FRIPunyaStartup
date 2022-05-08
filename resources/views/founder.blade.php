<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    @foreach($user as $us)
        <a href="/portofolio/{{$us->product}}">
            <h1>{{$us->product}}</h1>
            <p>{{$us->type->name}}</p>
        </a>
    @endforeach

</body>
</html>