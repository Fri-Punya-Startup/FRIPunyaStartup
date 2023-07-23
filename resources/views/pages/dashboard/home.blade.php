@extends('pages.dashboard.layouts.main')

@section('style')
    <style>
        :root {
            --main-bg-color: #ffffff;
            --main-text-color: #212069;
            --second-text-color: #292942;
            --second-bg-color: #c1efde;
        }

        .primary-text {
            color: var(--main-text-color);
        }

        .second-text {
            color: var(--second-text-color);
        }

        .primary-bg {
            background-color: var(--main-bg-color);
        }

        .secondary-bg {
            background-color: var(--second-bg-color);
        }

        .rounded-full {
            border-radius: 100%;
        }

        .list-group-item {
            border: none;
            padding: 20px 30px;
        }

        .list-group-item.active {
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
        }

        .text-title {
            font-size: 16px;
            color: #9B9B9B;
            text-align: justify;
        }

        .card-image {
            width: 70px;
            margin-bottom: 24px;
        }
    </style>
@endsection

@section('main')
    <div class="container-fluid">

        <div class="main-content row">
            <h2 class="fw-bold my-4" style="color: #212069">Home</h2>

            <div class="col-4">
                <h3 class="text-desc fs-4 second-text fw-bold mb-4">Start develop your idea!</h3>
                <p class="text-title">Create your team and develop an idea until it becomes a startup </p>
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
                        <div class="row align-items-center col-auto mb-2">
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
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="rounded-3 img-fluid mb-2" src="{{ $team->logo }}" alt="{{ $team->name }}'s logo" style="height: 60px; width: auto">
                            <h2 class="fs-5 fw-bold mb-3">{{ $team->name }}</h2>
                        </div>
                        <p>show detail></p>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-3 justify-content-center mb-4">
                            <div class="col justify-content-center text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-image rounded-circle article-img" id="img" src="{{ $team->leader->avatar }}" alt="{{ $team->leader->name }}'s avatar">
                                        <h5 class="card-title fw-bold fs-6">{{ $team->leader->name }} (Leader)</h5>
                                        <p class="card-text">{{ $team->leader->role }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($team->members as $member)
                                @if ($member->id != $team->leader->id)
                                    <div class="col justify-content-center text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-image rounded-circle article-img" id="img" src="{{ $member->avatar }}" alt="{{ $member->name }}'s avatar">
                                                <h5 class="card-title fw-bold fs-6">{{ $member->name }}</h5>
                                                <p class="card-text">{{ $member->role }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                {{-- Jika belum punya team --}}
                <div class="col-auto">
                    <h3 class="text-desc fs-4 second-text fw-bold mb-4">You don't have a team.</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
