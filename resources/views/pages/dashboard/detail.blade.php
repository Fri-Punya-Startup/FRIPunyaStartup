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
    </style>
@endsection

@section('main')

<div class="container mt-5">
    <h1>Detail Tim</h1>
    {{-- <p>Nama Tim: {{ $team->name_team }}</p> --}}
    <p>Nama Startup: {{ $team->startup->startup_name }}</p>
    <p>Description: {{ $team->startup->description }}</p>
    <p>Nama Owner: {{ $team->startup->owner->name }}</p>
    <h2>Anggota Tim</h2>
    <ul>
        @foreach ($team->members as $member)
            <li>{{ $member->name }} | {{ $member->role->name }} </li>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>
</body>

</html>

@endsection
