@extends('layouts.app')

@section('title')
    Schedules | Admin Penjadwalan
@endsection

@section('content')
    <h3>Schedules</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/schedule/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col" style="width: 20%">hari</th>
                <th scope="col" style="width: 15%">rute</th>
                <th scope="col" style="width: 30%">tanggal</th>
                <th scope="col" style="width: 20%">waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($schedules as $Schedule)
                <tr>
                    <td>{{ $Schedule->hari }}</td>
                    <td>{{ $Schedule->rute }}</td>
                    <td>{{ $Schedule->tanggal }}</td>
                    <td>{{ $Schedule->waktu }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
