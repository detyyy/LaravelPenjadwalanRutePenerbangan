@extends('layouts.app')

@section('title')
Flight | Admin Penjadwalan
@endsection

@section('content')
<h3>Flight</h3>
<button type="button" class="btn btn-tambah">
  <a href="/flight/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
    <th scope="col" style="width: 30%">Gambar</th>
            <th scope="col" style="width: 30%">Nama Maskapai</th>
             <th scope="col" style="width: 15%">Asal</th>
            <th scope="col" style="width: 20%">Tujuan</th>
            <th scope="col" style="width: 20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($flight as $flight)
    <tr>
      <td><img src="{{ asset('img_pesawat/' . $flight->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $flight->nama }}</td>
      <td>{{ $flight->asal }}</td>
      <td>{{ $flight->tujuan }}</td>
      <td>
        <a class='btn-edit' href="/flight/edit/{{ $flight->id_flight }}">Edit</a>
        |
        <a class='btn-delete' href="/flight/hapus/{{ $flight->id_flight }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
