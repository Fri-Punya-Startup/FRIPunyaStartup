<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$portofolio->product}}</title>
</head>
<body>
    {{$portofolio->product}}
    <br>
    <a href="/type/{{$portofolio->type->name}}">
        {{$portofolio->type->name}}
    </a>
    <br>
    <a href="/founder/{{$portofolio->user->name}}">
        {{$portofolio->user->name}}
    </a>
    <br>
    {!! $portofolio->description !!}
    <br>
    {{$portofolio->web}}
    <br>
    {{$portofolio->contact}}
</body>
</html>