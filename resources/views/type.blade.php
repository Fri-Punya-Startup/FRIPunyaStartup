<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type FRI Punya Startup</title>
</head>
<body>
    @foreach($type as $p)
        <p>{{$p->name}}</p>
    @endforeach
</body>
</html>