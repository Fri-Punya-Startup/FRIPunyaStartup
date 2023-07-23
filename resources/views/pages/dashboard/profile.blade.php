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
    <div class="container-fluid">
        <h2 class="fw-bold my-4" style="color: #212069">Profile</h2>
        <div class="rounded-3 p-5 shadow">
            @if (session()->has('alert'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('alert') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Ups! terjadi kesalahan saat memasukan data:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif
            <form id="profile-form" action="{{ route('dashboard.profile.patch') }}" method="POST" enctype="multipart/form-data" x-data="{ dragging: false }" x-on:submit="$('#submit-btn').html(`<span class='spinner-border spinner-border-sm'></span>`);">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-lg">
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{ old('name') ?? auth()->user()->name }}" placeholder="Your name..." required>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" value="{{ auth()->user()->email }}" placeholder="Your email..." disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Change password...">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="avatar">Foto Profile</label>
                    <div class="card d-block drag-n-drop justify-content-center p-5 text-center" id="drag-n-drop" id="drag-n-drop" x-bind:class="dragging ? 'dragging' : null" x-on:dragover.prevent="dragging = true" x-on:dragleave="dragging = false" x-on:drop.prevent="dragging = false">
                        <img class="img-thumbnail rounded-circle img-avatar {{ auth()->user()->avatar ? null : 'd-none' }} mb-3" id="avatar-preview" src="{{ auth()->user()->avatar ?? null }}" alt="avatar preview">
                        <br>
                        <i class="ti ti-cloud-upload fs-2"></i>
                        <h6 class="mt-2">Drag and Drop here</h6>
                        <h6 class="text-secondary">or</h6>
                        <input class="d-none form-control" id="avatar-input" name="avatar" type="file" accept="image/*" x-ref="avatarInput">
                        <button class="btn text-light px-4" id="avatar-btn" type="button" style="background-color: #212069" x-text="dragging ? 'Drop here' : 'Select file'" x-on:click.prevent="$refs.avatarInput.click()"></button>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn text-light rounded-3" id="submit-btn" type="submit" style="background-color: #212069;">Update</button>
                </div>
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
