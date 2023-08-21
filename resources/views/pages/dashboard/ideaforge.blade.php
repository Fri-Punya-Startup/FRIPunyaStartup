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

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Start Up</th>
                
                <th>Owner</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($team as $list)
            <tr>
                <td></td>
                <td>{{$list->startup->startup_name}}</td>
                <td>{{$list->startup->owner->name}}</td>
                <td>
                    <!-- Tombol-tombol aksi di sini -->
                    <a href="ideaforge/{{$list->name_team}}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
      
            <!-- Tambahkan baris lain sesuai dengan data Anda -->
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };

    $(document).ready(function() {
            $('.btn-detail').on('click', function() {
                // Toggle dropdown
                $(this).next('.dropdown-menu').toggleClass('show');
            });
        });
</script>
</body>

</html>

@endsection