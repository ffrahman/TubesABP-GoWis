@extends('Dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Berita</h1>
    <a href="/dashboard/news" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
  </div>

    <div class="col-lg-8">
        <form action="/dashboard/news" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul Berita</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukkan Judul Berita" required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="excerpt" class="form-label">excerpt</label>
            <input type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" placeholder="Masukkan excerpt" required value="{{ old('excerpt') }}">
            @error('excerpt')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        <div class="mb-3">
            <label for="image" class="form-label">Upload Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            @error('content')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
            <trix-editor input="content"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>

        document.addEventListener('trix-file-accept', function(event) {
            event.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.dispaly = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
