<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $primaryKey = 'id_schedule';
    public $incrementing = true;
    protected $fillable = ['hari', 'tanggal', 'waktu', 'schedule_id', 'rute'];
    public $timestamps = false;
    
   
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id', 'id_flight');
    }

}
