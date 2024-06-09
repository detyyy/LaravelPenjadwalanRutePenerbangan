<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Barryvdh\DomPDF\Facade\Pdf;

class ScheduleController extends Controller
{
    public function index()
    {
        // Ambil semua data schedule dari database
        $schedules = Schedule::all();

        // Kirim data ke view
        return view('schedule.schedule', compact('schedules'));
    }

    public function cetak()
    {
        // Ambil semua data schedule dari database
        $schedules = Schedule::all();
        
        // Load view untuk PDF dengan data schedule
        $pdf = Pdf::loadView('schedule.schedule-cetak', compact('schedules'));

        // Download PDF dengan nama laporan-schedule.pdf
        return $pdf->download('laporan-schedule.pdf');
    }
}
