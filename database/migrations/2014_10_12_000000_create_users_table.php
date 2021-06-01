<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->year('angkatan_kkn');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('status', ['sudah-aktif', 'belum-aktif']);
            $table->enum('role', ['admin', 'mahasiswa']);
            $table->foreignId('id_kelompok')->references('id')->on('kelompoks');
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
        Schema::dropIfExists('users');
    }
}
