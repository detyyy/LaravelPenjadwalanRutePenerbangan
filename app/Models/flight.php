<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    use HasFactory;
    protected $table = 'flights';
    protected $primaryKey = 'id_flight';
    public $incrementing = true;
    protected $fillable = ['nama', 'asal', 'tujuan', 'gambar'];
    public $timestamps = false;

}
