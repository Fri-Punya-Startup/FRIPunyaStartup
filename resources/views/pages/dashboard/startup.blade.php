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

    <div class="main-content row my-4 gap-3">

        <div class="mb-3">
            <label for="inputNamaStartup" class="form-label fw-semibold">Nama Startup</label>
            <input type="text" class="form-control" id="inputNamaStartup" placeholder="Inputkan nama startupmu disini">
        </div>
        <div class="mb-3">
            <label for="inputDeskripsi" class="form-label fw-semibold">Deskripsi Startup</label>
            <textarea class="form-control" id="inputDeskripsi" placeholder="Tuliskan deskripsi startupmu disini " rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="inputKategori" class="form-label fw-semibold">Kategori Startup</label>
            <input type="text" class="form-control" id="inputKategori" placeholder="Inputkan kategori startupmu disini ">
        </div>
    </div>
</div>
@endsection
