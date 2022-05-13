@extends("dashboard.index")

@section('content')
    <style>
      trix-toolbar .trix-button-group--file-tools {
        display: none !important;
      }
    </style>
    <div class="container">
        <form method="post" action="/dashboard/posts/{{$post->slug}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="product" class="form-label"> Product </label>
                <input type="text" class="form-control" id="product" name="product" aria-describedby="emailHelp" value="{{old('product', $post->product)}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" readonly value="{{$post->slug}}">
            </div>
            <div class="mb-3">
                <label for="image">Gambar</label>
                <input type="hidden" name="oldImage" value={{$post->image}}>
                @if($post->image)
                    <img class="preview img-fluid" src="{{ asset('storage/'.$post->image) }}">
                @else
                    <img class="preview img-fluid">
                @endif
                <input type="file" name="image" class="form-control" id="image" onChange="previewImage()">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="product" class="form-label"> Web </label>
                <input type="text" class="form-control" id="product" name="web" aria-describedby="emailHelp" value="{{old('product', $post->web)}}">
            </div>
            <div class="mb-6">
                <label for="product" class="form-label"> Contact </label>
                <input type="number" class="form-control" id="product" name="contact" aria-describedby="emailHelp" value="{{old('product', $post->contact)}}">
            </div>
            <br>
            <select name="type_id" class="form-select" aria-label="Default select example">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <br/>
            <br>
            {{-- trick editor --}}
            <input id="description" value="{{old('description', $post->description)}}" type="hidden" name="description">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <trix-editor input="description"></trix-editor>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
    


    <link rel="stylesheet" type="text/css" href="/trix.css">
    <script type="text/javascript" src="/trix.js"></script>
    <script>
        const product = document.querySelector('#product');
        const slug = document.querySelector('#slug');

        product.addEventListener('change', function(e) {
            fetch('/dashboard/post/createSlug' + '?product=' + product.value)
                .then(res => res.json())
                .then(data => {
                    slug.value = data.slug;
                })
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const input = document.querySelector('#image');
            const image = document.querySelector('.preview');

            const file = input.files[0];

            image.style.display = 'block';

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                image.src = '';
            }
        }
    </script>
@endsection
