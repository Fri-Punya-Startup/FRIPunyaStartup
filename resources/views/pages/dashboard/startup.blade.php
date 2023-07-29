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

        #submit-btn,
        #edit-btn {
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
    <div class="container-fluid mt-5 px-4" x-data="{ dragging: false, edit: false }">

        <div class="row my-4 gap-3">

            @if (session()->has('alert'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('alert') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Ups! terjadi kesalahan saat merubah data:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif

            @if (auth()->user()->id == $startup->owners_id)
                <template x-if="!edit">
                    <div class="d-flex justify-content-end">
                        <button class="btn text-light rounded-3" id="edit-btn" type="submit" style="background-color: #212069;" x-on:click="edit = true">Edit</button>
                    </div>
                </template>
            @endif

            <form id="startup-form" action="{{ route('dashboard.startup.patch') }}" method="POST" enctype="multipart/form-data" x-on:submit="$('#submit-btn').html(`<span class='spinner-border spinner-border-sm'></span>`);">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label class="form-label fw-semibold" for="inputNamaStartup">Nama Startup</label>
                    <input class="form-control" id="inputNamaStartup" name="startup_name" type="text" value='{{ $startup->startup_name }}' placeholder="Inputkan nama startupmu disini" x-bind:disabled="!edit">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" for="inputDeskripsi">Deskripsi Startup</label>
                    <textarea class="form-control" id="inputDeskripsi" name="description" placeholder="Tuliskan deskripsi startupmu disini " x-bind:disabled="!edit">{{ $startup->description }}</textarea>
                </div>

                {{-- <div class="mb-3">
            <label for="inputKategori" class="form-label fw-semibold">Kategori Startup</label>
            <input type="text" class="form-control" id="inputKategori" placeholder="Inputkan kategori startupmu disini ">
        </div> --}}

                <div class="mb-3">
                    <label class="form-label" for="avatar">Logo Startup</label>
                    <div class="card d-block justify-content-center p-5 text-center" id="drag-n-drop" id="drag-n-drop" x-bind:class="{ 'drag-n-drop': edit, 'dragging': dragging }" x-on:dragover.prevent="dragging = true" x-on:dragleave="dragging = false" x-on:drop.prevent="dragging = false" x-bind:style="!edit && { 'background-color': '#e9ecef' }">
                        <img class="img-thumbnail img-avatar mb-3 rounded" id="avatar-preview" src="{{ $startup->image }}" alt="startup's logo">
                        <div x-show="edit" x-transition>
                            <br>
                            <i class="ti ti-cloud-upload fs-2"></i>
                            <h6 class="mt-2">Drag and Drop here</h6>
                            <h6 class="text-secondary">or</h6>
                            <input class="d-none form-control" id="avatar-input" name="image" type="file" accept="image/*" x-ref="avatarInput">
                            <button class="btn text-light px-4" id="avatar-btn" type="button" style="background-color: #212069" x-text="dragging ? 'Drop here' : 'Select file'" x-on:click.prevent="$refs.avatarInput.click()"></button>
                        </div>
                    </div>
                </div>

                <template x-if="edit">
                    <div class="d-flex justify-content-end">
                        <button class="btn text-light rounded-3" id="submit-btn" type="submit" style="background-color: #212069;">Update</button>
                    </div>
                </template>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const avatarPreview = $('#avatar-preview');
        const avatarInput = $('#avatar-input');
        const dragDrop = $('#drag-n-drop');

        function imagePreview(files) {
            const file = files;
            const fileType = file["type"];
            const validImageTypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/jfif", "image/webp"];
            if ($.inArray(fileType, validImageTypes) < 0) {
                avatarPreview.addClass('d-none');
                avatarInput.val('');
                alert('Ekstensi file yang didukung: PNG, JPG, JPEG, GIF, JFIF, WEBP')
            } else if (file.size > 2097152) {
                avatarPreview.addClass('d-none');
                avatarInput.val('');
                alert('Ukuran file maksimal adalah 2MB')
            } else {
                let reader = new FileReader();
                reader.onload = function(e) {
                    avatarPreview.attr('src', e.target.result);
                    avatarPreview.removeClass('d-none');
                }
                reader.readAsDataURL(file);
            }
        };

        dragDrop.on('drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const files = e.originalEvent.dataTransfer.files;
            if (files.length > 0) {
                avatarInput.prop('files', files);
                imagePreview(files[0]);
            }
        });

        avatarInput.change(function(e) {
            e.preventDefault();
            imagePreview(this.files[0]);
        });
    </script>
@endsection
