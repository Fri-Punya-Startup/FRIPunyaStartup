@extends("layouts.main")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/event/event.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>EVENTS</h1>
        </div>
    </div>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <div class="event-section">
        <div class="event-search-input">
            <div class="left-side">
                <details>
                    <summary class="radios">
                        <input type="radio" name="item" id="default" title="Webinar" checked>
                        <input type="radio" name="item" id="item1" title="Item 1">
                        <input type="radio" name="item" id="item2" title="Item 2">
                        <input type="radio" name="item" id="item3" title="Item 3">
                    </summary>
                    <ul class="list">
                        <li>
                            <label for="item1">Item 1</label>
                        </li>
                        <li>
                            <label for="item2">Item 2</label>
                        </li>
                        <li>
                            <label for="item3">Item 3</label>
                        </li>
                    </ul>
                </details>
                <form action="/" method="get">
                    <label for="">Event Name</label>
                    <input type="search">
                </form>
            </div>
            <div class="search-button">
                <button>Search</button>
            </div>
        </div>
        <div class="event-card-container">
            @foreach ($events as $e)
                <div class="event-card">
                    <div class="event-poster">
                        <img src="images/portofolio/tes.svg" alt="">
                    </div>
                    <div class="event-title">
                        <h7 class="header2">{{ $e->title }}</h2>
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
                    <!-- <div classevent-action">
                        <a href="/register-event/{{ $e->slug }}">Register</a>
                    </div> -->
                </div>
            @endforeach
        </div>
    </div>
    {{$events->links()}}
</body>
</html>
@endsection