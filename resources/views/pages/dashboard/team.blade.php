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

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col text-start">
                <h2 class="fs-5 fw-bold mb-3 mt-4">Daftar Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="card cardketua shadow">
                    <div class="card-body cardbody-ketua">
                        <img class="card-image rounded-circle article-img mx-auto" id="" src="{{ $leader->avatar }}" width="100">
                        <h5 class="card-title fw-bold fs-6 text-center">{{ $leader->name }}</h5>
                        <p class="card-text text-center">Ketua</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            Kode Refferal Team anda
            <h3 id="copyButton"><i class="bi bi-clipboard"></i>{{ $refferal }}</h3>
        </div>
        <div class="row mt-4">
            {{-- <div class="col-md-3 justify-content-center text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <img class="card-image rounded-circle article-img" src="images/team1/anggota1.png" id="img">
                                <h5 class="card-title fw-bold fs-6">Bagus Satrio</h5>
                                <p class="card-text">Anggota</p>
                            </div>
                        </div>
                    </div> --}}
            @if ($users->count() > 0)
                @foreach ($users as $user)
                    <div class="col-md-3 justify-content-center text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <img class="card-image rounded-circle article-img" src="{{ $user->avatar }}" width="100" id="img">
                                <h5 class="card-title fw-bold fs-6">{{ $user->name }}</h5>
                                <h5 class="card-title fw-bold fs-6">{{ $user->role->name }}</h5>
                                <p class="card-text">Anggota</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No team members found.</p>
            @endif
        </div>
    </div>

    <script>
        // Mengatur tindakan saat tombol "Copy" diklik
        document.getElementById("copyButton").addEventListener("click", function() {
            copyTextToClipboard("{{ $refferal }}");
        });

        // Fungsi untuk menyalin teks ke clipboard
        function copyTextToClipboard(text) {
            const tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("Berhasil di copy {{ $refferal }}");
        }
    </script>
@endsection
