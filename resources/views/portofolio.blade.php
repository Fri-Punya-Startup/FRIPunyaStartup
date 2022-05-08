@extends("layouts.main")

@section('content')
    <link rel="stylesheet" href="css/portofolio/style.css">
    <meta charset="UTF-8">
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        h1{
            color: white;
        }
    </style>
    <div class="portofolio">
            <div class="header">
               <div class="row">
                    <div class="col-md-9">
                        <a href="/portofolio"><h1>Our Portofolio</h1></a>
                        <h4>
                            @if (request('type'))
                               Type : {{request('type')}}
                            @else
                                Type : All
                            @endif
                        </h4>
                    </div>
                    <div class="col md-3">
                        <form action="/portofolio" method="get">
                        @if (request('type'))
                            <input type="hidden" name="type" value="{{request('type')}}">
                        @elseif (request('founder'))
                            <input type="hidden" name="founder" value="{{request('founder')}}">
                        @endif
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit" class="btn btn-success">Search</button>
                        </form>
                    </div>
               </div>
            </div>
            <div class="container">
                <div class="contents">
                    <div class="row">
                    @forelse($porto as $p)
                        <div class="col-md-3 porto">
                            <a href="/portofolio/{{$p->product}}">
                                <img src="images/portofolio/tes.svg" alt="">
                                <h3>{{$p->product}}</h3>
                                <h5>{{$p->type->name}}</h5>
                                <p>{{$p->user->name}}</p>
                            </a>
                        </div>
                    @empty
                        <h2>No Data</h2>
                    @endforelse
                    </div>
                </div>          
            </div>
            <div class="d-flex justify-content-center">
                {{$porto->links()}}
            </div>
    </div>
@endsection