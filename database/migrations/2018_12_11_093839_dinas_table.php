<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinass', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passwordD');
            $table->string('emailD');
            $table->string('namaD');
            $table->integer('urutP');
            $table->string('id_laporan');
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
        Schema::dropIfExists('dinass');
    }
}
