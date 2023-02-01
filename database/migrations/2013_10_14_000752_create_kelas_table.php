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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id');
            // $table->enum('tingkat_kelas', ['X' , 'XI', 'XII']);
            #
            $table->char('nama_kelas');
            $table->integer('kuota');
            $table->date('tahun_masuk');
            $table->date('tahun_keluar');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('guru')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('bk_id');
            $table->foreign('bk_id')->references('id')->on('bk')
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
        Schema::dropIfExists('kelas');
    }
};
