<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenugasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penugasan', function (Blueprint $table) {
            $table->id();
            $table->string('np');
            $table->integer('kontrak_ke');
            $table->string('id_nomorSp');
            $table->string('tanggalSp');
            $table->string('tanggal_mulai');
            $table->string('tanggal_berakhir');
            $table->string('sebelum_adendum');
            $table->string('masa_jeda');
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
        Schema::dropIfExists('penugasan');
    }
}
