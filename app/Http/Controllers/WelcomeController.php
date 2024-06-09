<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Schedule;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $flight = Flight::all();

        return view('welcome', compact('flight'));
    }
    public function CreateSchedule(Request $request)
    {
        $test=$this->validate($request, [
            'id_flight' => 'required|integer',
            'detail-hari' => 'required',
            'detail-tanggal' => 'required',
            'detail-waktu' => 'required',
            'detail-rute' => 'required',
        ]);
        Schedule::create([
            'hari' => $request->input('detail-Hari'),
            'tanggal' => $request->input('detail-Tanggal'),
            'waktu' => $request->input('detail-Waktu'),
            'flight_id' => $request->input('id_flight'),
            'rute' => $request->input('detail-Rute'),
        ]);
        return redirect('/');
    }
}
