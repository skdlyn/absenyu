<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekapabsen', function (Blueprint $table) {
            $table->id('id');
            $table->string('tanggal');
            $table->string('kelas');
            // $table->unsignedBigInteger('id_absen');
            // $table->foreign('id_absen')->references('tanggal')->on('absen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekapabsen');
    }
};
