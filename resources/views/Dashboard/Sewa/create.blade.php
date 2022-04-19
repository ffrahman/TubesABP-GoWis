@extends('Dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Sewa</h1>
    <a href="/dashboard/sewa" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
</div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/sewa" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_kendaraan" class="form-label">Merk Kendaraan</label>
                <input type="text" class="form-control @error('nama_kendaran') is-invalid @enderror" id="nama_kendaraan" name="nama_kendaraan" placeholder="Masukkan Kendaraan" required autofocus value="{{ old('nama_kendaraan') }}">
                @error('nama_kendaraan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga" required autofocus value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="penumpang" class="form-label">Penumpang</label>
                <input type="text" class="form-control @error('penumpang') is-invalid @enderror" id="penumpang" name="penumpang" placeholder="Masukkan Penumpang" required autofocus value="{{ old('penumpang') }}">
                @error('penumpang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
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