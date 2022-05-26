@extends("admin.layouts")
@section('content')
    <style>
        .select-items{
            width: 200px !important;
        }
        .caption{
            margin-left: 25px;
        }
        .table-content{
            margin-top: -20px;
            padding-top: 50px;
        }
    </style>
    <div class="child">
        <h5 class="caption">Home</h5>
        <div class="table-content">
            <table>
                @foreach($events as $e)
                    <tr>
                        <td><img src="/storage/{{$e->poster}}" alt=""></td>
                        <td data-label="NAMA">{{$e->title}}</td>
                        <td data-label="description">{{$e->description}}</td>   
                    </tr>
                @endforeach
            </table>
            <div class="d-flex justify-content-center">
                {{$events->links()}}
            </div>
            <div class="btn-bottom">
                <a href="admin/create">
                    <input type="button" value="Add Event">
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection