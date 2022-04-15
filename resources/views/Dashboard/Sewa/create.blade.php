@extends('Dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Sewa</h1>
  </div>

    <div class="col-lg-8">
        <form action="/dashboard/sewa" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kendaran" class="form-label">Merk Kendaraan</label>
            <input type="text" class="form-control @error('nama_kendaran') is-invalid @enderror" id="nama_kendaran" name="nama_kendaran" placeholder="Masukkan Kendaraan" required autofocus value="{{ old('nama_kendaran') }}">
            @error('nama_kendaran')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" placeholder="Masukkan Gambar" required autofocus value="{{ old('gambar') }}">
            @error('gambar')
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
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection