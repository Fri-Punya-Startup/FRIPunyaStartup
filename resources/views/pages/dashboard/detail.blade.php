@extends('pages.dashboard.layouts.main')

@section('style')
    <style>
        .img-avatar {
            height: 150px;
            object-fit: cover;
            aspect-ratio: 1/1;
        }

        .drag-n-drop {
            border: 1px dashed #ccc !important;
        }

        .drag-n-drop.dragging {
            border: 2px dashed rgb(66, 75, 255) !important;
        }

        #submit-btn {
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        label {
            font-weight: bold;
        }
        .button-lihat-proposal{
            max-width: 200px
        }
    </style>
@endsection

@section('main')

<div class="container mt-5">
    <h1>Detail Tim</h1>
    {{-- <p>Nama Tim : {{ $team->name_team }}</p> --}}
    <div class="card">
        <div class="card-body">
            <div class="flex-column gap-0 ">
                <h5 class="fw-bold ">Nama Startup</h5>
                <p> {{ $team->startup->startup_name }}</p>
            </div>
            <div class="flex-column gap-0 ">
                <h5 class="fw-bold ">Deskripsi </h5>
                <p> {{ $team->startup->description }}</p>
            </div>
            <div class="flex-column gap-0 ">
                <h5 class="fw-bold ">Nama Ketua Tim</h5>
                <p> {{ $team->startup->owner->name }}</p>
            </div>
        </div>
    </div>

    <div class="flex-column gap-5 mt-3  ">
        <h2>Anggota Tim</h2>
        <table class="table">
            <tbody>
                @foreach ($team->members as $member)
                    <tr>
                        <td>{{ $member->name }} | {{ $member->role->name }}</td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

<div class="container proposal-section">
    <h1>Proposal</h1>
    <div class="card">
       <div class="card-body row ">
               @foreach ($proposal as $porto )
                    <div class="flex-column gap-0">
                        <h5 class="fw-bold ">Judul</h5>
                        <p>{{$porto->judul}}</p>
                    </div>
                    <div class="flex-column gap-0 col ">
                        <h5 class="fw-bold ">Status</h5>
                        <p class="btn btn-warning">{{$porto->status}}</p>
                    </div>
                    <div class="flex-column gap-0 col">
                        <h5 class="fw-bold ">keterangan</h5>
                        <p>{{$porto->keterangan}}</p>
                    </div>
                   <div class="d-grid  flex-column  ">
                       <object data="{{ $porto->dokumen }}" type="application/pdf">
                       alt : <a href="{{ $porto->dokumen }}">lihat</a>
                       </object>
                       <a class="btn btn-primary button-lihat-proposal" href="{{ $porto->dokumen }}">Lihat Proposal</a>
                   </div>
                   
               @endforeach
       </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var index = 1;
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>
</body>

</html>

@endsection
