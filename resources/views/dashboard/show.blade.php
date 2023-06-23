@extends("dashboard.index")

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
  </head>
  <body>
    <table>
        <thead>
        <tr>
            <th>Product</th>
            <th>Type</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach($post as $us) --}}
            <tr>
                <td>{{$post->product}}</td>
                <td>{{$post->type->name}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <a href="/dashboard/post/{{$post->product}}">
                        <button class="btn btn-primary">View</button>
                    </a>
                </td>
                <td>
                    <a href="/dashboard/post/{{$post->product}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/dashboard/post/{{$post->product}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>                <td>
                    <a href="/dashboard/post/{{$post->product}}">
                        <button class="btn btn-primary">Delete</button>
                    </a>
                </td>
            </tr>
        {{-- @endforeach --}}
    </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
@endsection