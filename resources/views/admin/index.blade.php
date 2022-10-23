@extends("admin.layouts")
@section('content')
    {{-- buat tabel untuk list user --}}
    <div class="table">
        <div class="table-content">
            <div class="header-table">
                <div class="row">
                    <div class="col-6">
                        <h3>List Pendaftar FPS</h3>
                    </div>
                    <div class="col-6 header-table-right">.col-6</div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="/admin/user/{{ $user->id }}" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
@endsection