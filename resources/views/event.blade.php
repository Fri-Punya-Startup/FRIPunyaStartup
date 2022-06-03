<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    @foreach ($events as $e)
        <div class="event">
            <div class="event-title">
                <h2>{{ $e->title }}</h2>
            </div>
            <div class="event-poster">
                <img src="{{ asset('storage/' . $e->poster) }}" alt="">
            </div>
            <div class="event-description">
                <p>{{ $e->description }}</p>
            </div>
            <div class="event-date">
                <p>{{ $e->date }}</p>
            </div>
            <div class="event-time">
                <p>{{ $e->time }}</p>
            </div>
            <div class="event-wa">
                <p>{{ $e->grup_wa }}</p>
            </div>
            <div class="event-khusus">
                @if($e->khusus == 0)
                    <p>Semua</p>
                @elseif($e->khusus == 1)
                    <p>Member</p>
                @elseif($e->khusus == 2)
                    <p>Founder</p>
                @endif
            </div>
            <div class="event-action">
                <a href="/register-event/{{ $e->slug }}">Register</a>
            </div>
        </div>
    @endforeach
</body>
</html>