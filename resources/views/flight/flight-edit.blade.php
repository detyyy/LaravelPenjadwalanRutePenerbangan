@extends('layouts.app')

@section('title')
Edit Flight | Admin Penjadwalan
@endsection

@section('content')
<h3>Edit Flight</h3>
<div class="form-login">
  <form action="{{ url('/flight/update/' . $flight->id_flight) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="flight">Flight</label>
    <input class="input" type="text" name="nama" id="flight" placeholder="Flight"
      value="{{ old('nama', $flight->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="Nama_Maskapai">Nama Maskapai</label>
    <input class="input" type="text" name="Nama_Maskapai" id="Nama_Maskapai" placeholder="Nama_Maskapai"
      value="{{ old('Nama_Maskapai', $flight->Nama_Maskapai) }}" />
    @error('Nama_Maskapai')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="Asal">Asal</label>
    <textarea class="input" name="Asal" id="Asal"
      placeholder="Asal">{{ old('deskripsi', $flight->Asal) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="Tujuan">Tujuan</label>
    <textarea class="input" name="Tujuan" id="Tujuan"
      placeholder="Tujuan">{{ old('Tujuan', $flight->Tujuan) }}</textarea>
    @error('Tujuan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <!-- <label for="Tujuan">Tujuan</label>
    <textarea class="input" name="Tujuan" id="Tujuan"
      placeholder="Tujuan">{{ old('Tujuan', $flight->Tujuan) }}</textarea>
    @error('Tujuan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror -->

    <label for="photo">Photo</label>
    <img src="{{ asset('img_pesawat/' . $flight->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
