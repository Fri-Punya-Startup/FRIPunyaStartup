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

@if (session()->has('alert'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    {{ session('alert') }}
    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form id="proposal-form" action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-lg">
            <div class="mb-3">
                <label class="form-label" for="judul">Judul</label>
                <input class="form-control" id="judul" name="judul" type="text"  placeholder="Tuliskan judul..." value="{{$proposal->judul}}" required>
            </div>
        </div>
        <div class="col-lg">
            <div class="mb-3">
                <label class="form-label" for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan proposal..." required style="width: 100%; height: 150px;">{{$proposal->keterangan}}</textarea>
            </div>
        </div>        
    </div>
    <div class="mb-3">
        <label class="form-label" for="dokumen">Upload Proposal</label>
        <div class="card d-block drag-n-drop justify-content-center p-5 text-center">
            <div>
                <object data="{{ $proposal->dokumen }}" type="application/pdf" width="300" height="200">
                alt : <a href="{{ $proposal->dokumen }}">lihat</a>
                </object>
            </div>
            <br>
            <i class="ti ti-cloud-upload fs-2"></i>
            <h6 class="mt-2">Drag and Drop here</h6>
            <h6 class="text-secondary">or</h6>
            <input class="d-none form-control" id="dokumen-input" name="dokumen" type="file" accept=".pdf">
            <label for="dokumen-input" class="btn text-light px-4" id="dokumen-btn" style="background-color: #212069">
                Select file
            </label>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button class="btn text-light rounded-3" id="submit-btn" type="submit" style="background-color: #212069;">Update</button>
    </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // ... Kode JavaScript sebelumnya ...

    dokumen.getElementById("proposal-form").addEventListener("submit", function(event) {
        var fileInput = dokumen.getElementById("dokumen-input");
        var fileName = fileInput.value;
        var allowedExtensions = ["pdf"];
        var fileExtension = fileName.split(".").pop().toLowerCase();

        if (allowedExtensions.indexOf(fileExtension) === -1) {
            alert("Berkas tidak valid. Hanya diperbolehkan berkas PDF.");
            event.preventDefault(); // Mencegah pengiriman formulir
            return false;
        }
    });
</script>
</body>

</html>

@endsection