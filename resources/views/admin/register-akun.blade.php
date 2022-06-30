@extends('admin.layouts')

@section('content')
    <div class="child">
        <h5 class="caption">Registrasi Member</h5>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">SEBAGAI</th>
                        <th scope="col">VERIFIKASI</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $m)
                        <tr>
                            @if(empty($m))
                                <p>kosoong</p>
                            @ifelse($m->verifikasi != null)
                                @continue;
                            @else
                                <form action="/wa/acc" method="post">
                                    @csrf
                                    <td data-label="NAMA">{{$m->name}}</td>
                                    <td data-label="EMAIL">{{$m->email}}</td>
                                    <td data-label="SEBAGAI">{{$m->role}}</td>
                                    <td data-label="VERIFIKASI">
                                        <input type="hidden" name="id" value="{{$m->id}}">
                                        <input type="hidden" name="phone" value="{{$m->phone}}">
                                        <button class="btn btn-primary" type="submit" value="Verifikasi" onclick="verifikasi({{$m->id}},{{$m->phone}})"> Verifikasi </button>
                                    </td>
                                    <td data-label="DELETE">
                                        <input type="hidden" name="id" value="{{$m->id}}">
                                        <button class="btn btn-danger" name="delete" type="submit" value="Delete"> Delete </button>
                                    </td>
                                </form>
                            @endif
                        </tr>  
                    @endforeach
                </tbody>      
            </table>
            <div class="btn-bottom">
                <input type="button" value="Add member">
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection