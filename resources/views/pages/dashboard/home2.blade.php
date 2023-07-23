<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="/css/dashboard/dashboard.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a1b53e9e69.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Welcome to Ideaforge</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-body-tertiary" id="sidebar-wrapper">
            <div class="sidebar-heading py-4 text-center">
                <img src="images/logoIdeaforge.png" alt="" width="70">
            </div>

            <div class="list-group list-group-flush my-3 text-center">
                <a class="list-group-item list-group-item-action second-text active bg-transparent" href="#"><i class="bi bi-grid-fill me-2"></i>Home</a>
                <a class="list-group-item list-group-item-action second-text bg-transparent" href="#"><i class="fa fa-user-group me-2"></i>Team</a>
                <a class="list-group-item list-group-item-action second-text bg-transparent" href="#"><i class="fa fa-rocket me-2"></i>Startup</a>
                <a class="list-group-item list-group-item-action second-text bg-transparent" href="{{ route('dashboard.profile') }}"><i class="fa-solid fa-user me-2"></i>Profile</a>
                <a class="list-group-item list-group-item-action text-danger bg-transparent" href="{{ route('logout') }}"><i class="fa fa-right-from-bracket me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bars primary-text fs-5 me-3" id="menu-toggle"></i>
                    <h2 class="fs-5 fw-bold ms-3 m-0">Home</h2>
                </div>

                <div class="side-profile row">
                    <div class="col-3 justify-content-end">
                        <img class="rounded-circle article-img" id="img" src="{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" width="40">
                    </div>
                    <div class="text-profile col">
                        <h3 class="second-text fw-bold fs-6">{{ $user->name }}</h3> <br>
                        <p class="text-gmail">{{ $user->email }}</p>
                    </div>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <div class="main-content row my-4">

                    <div class="col-4">
                        <h3 class="text-desc ms-5 fs-4 second-text fw-bold mb-4">Start develop your idea!</h3>
                        <p class="text-title ms-5">Create your team and develop an idea until it becomes a startup </p>
                    </div>

                    <div class="col-1 d-flex ms-5" style="height: 150px;">
                        <div class="vr"></div>
                    </div>

                    @if ($team)
                        {{-- Jika sudah punya team --}}
                        <div class="row col-6">

                            @if ($startup)
                                {{-- Jika sudah punya startup --}}
                                <h3 class="fs-4 second-text fw-bold mb-4">Your team's startups</h3>
                                <div class="col-auto row align-items-center mb-2">
                                    <div class="col-3 justify-content-center text-center">
                                        <img class="col" src="{{ $startup->logo }}" alt="{{ $startup->name }} logo" width="80">
                                        <p class="fw-bold">{{ $startup->name }}</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-title col">{{ $startup->desc }}</p>
                                    </div>
                                </div>
                            @else
                                {{-- Jika belum punya startup --}}
                                <h3 class="fs-4 second-text fw-bold mb-4">Your team don't have any startup</h3>
                            @endif
                        </div>

                        <div class="row mt-5">
                            {{-- <img class="rounded-circle"src="{{ $team->logo }}" alt="{{ $team->name }}'s logo"> --}}
                            <div class="ms-5 mb-3 gap-3">
                                <img class="rounded-3 img-fluid mb-2" src="{{ $team->logo }}" alt="{{ $team->name }}'s logo" style="height: 60px; width: auto">
                                <h2 class="fs-5 fw-bold mb-3">{{ $team->name }}</h2>
                            </div>
                            <div class="col">
                                <div class="card-content row row-cols-1 row-cols-md-3 g-4">
                                    @foreach ($team->members as $member)
                                        <div class="col justify-content-center text-center">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img class="card-image rounded-circle article-img" id="img" src="{{ $member->avatar }}" alt="{{ $member->name }}'s avatar">
                                                    <h5 class="card-title fw-bold fs-6">{{ $member->name }}
                                                        {{ $member->id == $team->leader_id ? ' (Leader)' : null }}</h5>
                                                    <p class="card-text">{{ $member->role }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        {{-- Jika belum punya team --}}
                        <div class="col-auto">
                            <h3 class="text-desc ms-5 fs-4 second-text fw-bold mb-4">You don't have a team.</h3>
                            {{-- <p class="text-title ms-5">Create your team and develop an idea until it becomes a startup</p> --}}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
