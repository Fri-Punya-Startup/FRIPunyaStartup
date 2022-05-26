<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        label,input{
            display: block;
        }
        textarea{
            resize: none;
        }
    </style>
    <title>Create Event</title>
</head>
<body>
    <div class="event-main">
    @if($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    @endif
        <form method="POST" action="/admin" enctype="multipart/form-data">
            @csrf
            <label for="name">Nama Event</label>
            <input type="text" name="title" id="name" placeholder="Nama Event">
            <label for="poster">Poster Event</label>
            <input type="file" name="poster" id="poster">
            <img src="" alt="" id="poster-preview">
            <label for="description">Deskripsi Event</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <label for="date">Tanggal Event</label>
            <input type="date" name="tanggal" id="date">
            <label for="time">Waktu Event</label>
            <input type="time" name="waktu" id="time">
            <label for="khusus">Khusus Untuk</label>
            <select name="khusus" id="khusus">
                <option value="0">Semua</option>
                <option value="1">Member</option>
                <option value="2">Founder</option>
            </select>
            <button type="submit"> Create </button>
        </form>
    </div>
</body>
<script>
    const poster = document.getElementById('poster');
    const posterPreview = document.getElementById('poster-preview');
    poster.addEventListener('change', function(){
        const file = this.files[0];
        const fileReader = new FileReader();
        fileReader.addEventListener('load', function(){
            posterPreview.setAttribute('src', this.result);
        });
        fileReader.readAsDataURL(file);
    });
</script>
</html>