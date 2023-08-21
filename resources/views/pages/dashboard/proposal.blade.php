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
@if ($leader == auth()->user()->id)
    <div>
        <h1>Proposal</h1>
        <ul>
            @forelse  ($portofolio as $porto )
                <p>Judul : {{$porto->judul}}</p>
                <p>Status : <p class="btn btn-warning">{{$porto->status}}</p></p>
                <p>Keterangan : {{$porto->keterangan}} </p>
                <a class="btn btn-primary" href="{{ $porto->dokumen }}">Download Proposal</a>
                @if ($leader == auth()->user()->id)
                    <a class="btn btn-primary" href="proposal/{{$porto->slug}}">Update Proposal</a>
                @endif
            @empty
                <form id="proposal-form" action="{{ route('dashboard.proposal.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg">
                            <div class="mb-3">
                                <label class="form-label" for="judul">Judul</label>
                                <input class="form-control" id="judul" name="judul" type="text"  placeholder="Tuliskan judul..." required>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="mb-3">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan proposal..." required style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="dokumen">Upload Proposal</label>
                        <div class="card d-block drag-n-drop justify-content-center p-5 text-center">
                            <i class="ti ti-file-earmark"></i>
                            <br>
                            <input class="d-none form-control" id="dokumen-input" name="dokumen" type="file" accept=".pdf">
                            <label for="dokumen-input" class="btn text-light px-4" id="dokumen-btn" style="background-color: #212069">
                                Select file
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn text-light rounded-3" id="submit-btn" type="submit" style="background-color: #212069;">Upload</button>
                    </div>
                </form>
            @endforelse
        </ul>
    </div>
@else
    <h1>Proposal</h1>
    <ul>
    @forelse  ($portofolio as $porto )
    <p>Judul : {{$porto->judul}}</p>
    <p>Status : <p class="btn btn-warning">{{$porto->status}}</p></p>
    <p>Keterangan : {{$porto->keterangan}} </p>
    <a class="btn btn-primary" href="{{ $porto->dokumen }}">Download Proposal</a>
    @if ($leader == auth()->user()->id)
        <a class="btn btn-primary" href="proposal/{{$porto->slug}}">Update Proposal</a>
    </ul>
    @endif
    @empty
        Proposal belum diupload oleh ketua
    @endforelse

@endif

<script>
    const input = document.getElementById('dokumen-input');
    const label = document.getElementById('dokumen-btn');
    console.log(label);
    input.addEventListener('change', function () {
        console.log(input)
        const fileName = input.files[0].name;
        label.textContent = fileName;
    });
</script>

@endsection
