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

    @if(auth()->user()->role_id != 4)
    <div class="container-fluid">
        <div class="main-content row my-4">
            <div class="col-4">
                <h3 class="text-desc fs-4 mb-4 second-text fw-bold">Start develop your idea!</h3>
                <p class="text-title">Create your team and develop an idea until it becomes a startup</p>
            </div>

            <div class="col-1 d-flex ms-5" style="height: 150px;">
                <div class="vr"></div>
            </div>

            @if(isset($teamName))
            <div class="col-6 row">
                <h3 class="text-desc fs-4 mb-4 second-text fw-bold">Your Startup</h3>
                <h4 class="fs-4 mb-4 second-text">{{$startup->startup_name}}</h4>
                <div class="col-3">
                    <img src="{{$startup->image}}" alt="" width="80" class="col">
                </div>
                <div class="col">
                    <p class="text-title col">{{ $startup->description }}</p>
                </div>
            </div>
            @else
            <div class="col-6">
                <h3 class="fs-4 mb-4 second-text fw-bold">You haven't joined a team yet</h3>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <h2 class="container fs-5 fw-bold ms-5 mb-3">Your Team</h2>
        <div class="col">
            @if(isset($users) && count($users) > 0)
            <div class="card-content row row-cols-1 row-cols-md-3 g-4">
                @foreach($users as $user)
                <div class="col justify-content-center text-center">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-image rounded-circle article-img" src="{{ $user->avatar }}" width="100" id="img">
                            <h5 class="card-title fw-bold fs-6">{{ $user->name }}</h5>
                            <p class="card-text">{{$user->role->name}}</p>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
            @else
            <p>No team members available.</p>
            @endif
        </div>
    </div>
    @else

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Kotak Warna Biru -->
                <div class="bg-primary p-4 rounded">
                    <h2>Start up yang terdaftar</h2>
                    <p>{{$team->count()}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Kotak Warna Pink -->
                <div class="bg-success p-4 rounded">
                    <h2>Team yang terdaftar</h2>
                    <p>{{$team->count()}}</p>
                </div>
            </div>
        </div>
    </div>
    @endif

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
