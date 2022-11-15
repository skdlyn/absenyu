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
        Schema::create('absen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswa');
            // $table->string('tanggal');
            $table->enum('status', ['Alfa', 'Izin', 'Hadir', 'Sakit']);
            $table->text('keterangan');
            $table->unsignedBigInteger('id_tanggal');
            $table->foreign('id_tanggal')->references('id')->on('rekapabsen')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen');
    }
};
