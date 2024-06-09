<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('Hari',50);
            $table->date('Tanggal',15);
            $table->time('Waktu');
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id_flight')->on('flight')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Rute');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
