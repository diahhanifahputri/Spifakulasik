<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BpbdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpbds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaBpbd');
            $table->string('passwordB');
            $table->string('emailB');
            $table->string('id_dinas');
            $table->string('id_laporan');
            $table->string('id_jadwal');
            $table->integer('nip');
            $table->string('jabatan');
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
        Schema::dropIfExists('bpbds');
    }
}
