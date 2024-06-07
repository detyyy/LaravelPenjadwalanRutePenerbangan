@extends('layouts.app')

@section('title')
Tambah Flight | Admin Penjadwalan
@endsection

@section('content')
<h3>Input Flight</h3>
<div class="form-login">
  <form action="{{ url('/flight/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nama">nama maskapai</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama maskapai">

    <label for="asal">asal</label>
    <input type="text" class="input" name="asal" id="asal" placeholder="asal">

    <label for="tujuan">tujuan</label>
    <input type="text" class="input" name="tujuan" id="tujuan" placeholder="tujuan">

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror


    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
