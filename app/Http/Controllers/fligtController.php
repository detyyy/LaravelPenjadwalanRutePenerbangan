<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\flight;
use Illuminate\Support\Facades\File;

class fligtController extends Controller
{
    public function index()
    {
        $flight = Flight::all();
        return view('flight.flight', compact('flight'));
    }

    public function create()
    {
        return view('flight.flight-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_pesawat';

        $gambar->move($tujuan_upload, $nama_gambar);

        $flight = Flight::create([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/flight');
    }

    public function edit($id_flight)
    {
        $flight = Flight::find($id_flight);
        return view('flight.flight-edit', compact('flight'));
    }

    public function update(Request $request, $id_flight)
    {
        $request->validate([
            'nama' => 'required',
            'asal' => 'asal',
            'tujuan' => 'tujuan',
            'Photo' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $flight = Flight::find($id_flight);

        if($request->hasFile('Photo')){

            File::delete('img_pesawat/'.$flight->gambar);
            $Photo = $request->file('gambar');
            $nama_Photo = time() . '_' . $Photo->getClientOriginalName();
            $tujuan_upload = 'img_pesawat';
            $Photo->move($tujuan_upload, $nama_Photo);
            $flight->Photo = $nama_Photo;
        }

        $flight->update([
            'Nomor_Peberbangan' => $request->Nomor_Penerbangan,
            'Maskapai' => $request->Maskapai,
            'Asal' => $request->Asal,
            'Tujuan' => $request->Tujuan,
            'Photo' => $request->Photo,
        ]);

        return redirect('/flight');
    }

    public function delete($id_flight)
    {
        $flight = Flight::find($id_flight);
        return view('flight.flight-hapus', compact('flight'));
    }

    public function destroy($id_flight)
    {
        $flight = Flight::find($id_flight);
        File::delete('img_pesawat/'.$flight->Photo);
        $flight->delete();
        return redirect('/flight');
    }

}

