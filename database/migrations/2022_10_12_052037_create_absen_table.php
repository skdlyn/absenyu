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
            // $table->unsignedBigInteger('siswa_id');
            // $table->foreign('siswa_id')->references('id')->on('siswa')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            // $table->unsignedBigInteger('kelas_id');
            // $table->foreign('kelas_id')->references('id')->on('kelas')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->string('kelas_id');
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('users');
            $table->string('tanggal');
            $table->string('status');
            // $table->unsignedBigInteger('tanggal_id');
            // $table->foreign('tanggal_id')->references('id')->on('tanggal');
            // $table->string('tanggal');
            // $table->string('status');
            // $table->char('surat')->nullable();
            $table->char('dokumen')->nullable();
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
