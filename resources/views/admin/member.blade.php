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
        <a href="/admin/register-akun">
            <button>Acc Akun</button>
        </a>
        <h5 class="caption">MEMBER</h5>
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                    <th scope="col">NAMA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">JABATAN</th>
                    <th scope="col">EDIT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $m)
                        <tr>
                            @if(empty($m->jabatan)  )
                                @continue;
                            @else
                                <td data-label="NAMA">{{$m->name}}</td>
                                <td data-label="EMAIL">{{$m->email}}</td>
                                <td data-label="JABATAN">{{$m->jabatan->name}}</td>
                                <td data-label="EDIT">
                                    <a href="/admin/edit-member/{{$m->id}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                </td>
                            @endif
                        </tr>  
                    @endforeach
                    @foreach($member as $m)
                        <tr>
                            @if($m->verifikasi == null || $m->role == "admin"  || $m->jabatan != null)
                                @continue;
                            @else
                                <td data-label="NAMA">{{$m->name}}</td>
                                <td data-label="EMAIL">{{$m->email}}</td>
                                <td data-label="JABATAN">{{$m->role}}</td>
                                <td data-label="EDIT">
                                    <a href="/admin/edit-member/{{$m->id}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                </td>
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
