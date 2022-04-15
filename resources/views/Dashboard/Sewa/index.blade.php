@extends('Dashboard.layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Sewa Kendaraan</h1>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-succces" role="alert" >
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/sewa/create" class="btn btn-primary mb-3">Tambah Sewa</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Merk Kendaraan</th>
          <th scope="col">harga</th>
          <th scope="col">Seat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($sewas as $sewa)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $sewa->nama_kendaran }}</td>
          <td>{{ $sewa->harga }}</td>
          <td>{{ $sewa->penumpang }}</td>
          <td>
              <a href="/sewaKendaraan" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
              <a href="" class="badge bg-danger"><span data-feather="trash-2"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection