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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('siswa_id');
            // $table->foreign('siswa_id')->references('id')->on('siswa')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('guru_id');
            // $table->foreign('guru_id')->references('id')->on('guru')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('bk_id');
            // $table->foreign('bk_id')->references('id')->on('bk')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('data');
    }
};
