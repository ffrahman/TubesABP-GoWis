@extends('Dashboard.layouts.main')

@section('content')
<div class="container d-flex flex-wrap justify-content-center m-auto">
  <section class="text-center">
    <br>
      <h4 class="mb-5"><strong>Paket Wisata</strong></h4>

      <div class="row" >
        <div class="col-lg-4 col-md-12 mb-4" style="width: 30rem">
          <hr>
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

              
              <img src="{{ asset('storage/' . $paket->image) }}" class="img-fluid" />
              


              <a href="#">
                <div class="mask" style="background-color: rgba(255, 255, 0, 0.15);"></div>
              </a>
            </div>
            <div class="card-body" style="background-color: rgba(255,253,208,1)">
              <h5 class="card-title">{{ $paket->nama }}</h5>
              <p class="card-text">
                Harga Paket Rp. {{ $paket->harga }}
              </p>
              <p>paket {{ $paket->durasi }} hari:</p>
              <p>{{ $paket->deskripsi }}</p>
  
              <p><a class="btn btn-primary" href="https://wa.wizard.id/b18f79"><i class="bi bi-whatsapp"></i> Contact Now!</a></p>
            </div>
          </div>
          <hr>
          <a href="/dashboard/paket" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>

          <a href="/dashboard/paket/{{ $paket->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>

          <form action="/dashboard/paket/{{ $paket->id }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Data akan dihapus!')"><span data-feather="trash-2"></span>Delete</button>
          </form>

        </div>
    </section>
</div>
@endsection