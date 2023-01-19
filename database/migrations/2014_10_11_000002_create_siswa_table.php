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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            // $table->string('email')->unique();
            // $table->string('password');
            // $table->string('role');
            $table->char('nisn');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('alamat');
            $table->char('jk');
            // $table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
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
        Schema::dropIfExists('siswa');
    }
};
