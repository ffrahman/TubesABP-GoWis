@extends('Dashboard.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Paket Wisata</h1>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-succces" role="alert" >
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-8 d-inline">
    <a href="/dashboard/paket/create" class="btn btn-primary mb-3">Tambah paket</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Paket</th>
          <th scope="col">harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pakets as $paket)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $paket->nama }}</td>
          <td>Rp. {{ $paket->harga }}</td>
          <td>
              <a href="/dashboard/paket/{{ $paket->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/paket/{{ $paket->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/paket/{{ $paket->id }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Data akan dihapus!')"><span data-feather="trash-2"></span></button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection