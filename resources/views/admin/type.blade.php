@extends('admin.layouts')

@section('content')
    <table>
        <thead>
            <tr>
                <th>
                    Type
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td>
                        {{$type->name}}
                    </td>
                    <td>
                        <a href="/admin/type/{{$type->id}}/edit">Edit</a>
                        <a href="/admin/type/{{$type->id}}/delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection