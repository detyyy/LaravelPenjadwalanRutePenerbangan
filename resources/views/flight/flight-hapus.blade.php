@extends('layouts.app')
@section('title')
Hapus Flight | Admin Penjadwalan
@endsection

@section('content')
<h3>Hapus Flight</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/flight/destroy/' . $flight->id_flight )}}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/flight">
      No
    </a>
  </button>
</div>
@endsection
