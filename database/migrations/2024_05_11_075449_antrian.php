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
        Schema::create('antrian',function(Blueprint $table){
            $table->id();
            $table->string('No_antrian',45);
            $table->string('status_antrian',45);
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade'); 
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:dropIfExist('antrian');
    }
};
