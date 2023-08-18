<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn');
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('jenis_kelamin');
            $table->string('game');
            $table->string('password');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registers');
    }
}