<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanPkwtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_pkwt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('np');
            $table->string('nama');
            $table->unsignedBigInteger('id_unit');
            $table->unsignedBigInteger('id_kodeBagan');
            $table->string('status');
            $table->integer('kontrak_ke');
            
            
            
            // $table->foreign('id_unit')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_kodeBagan')->references('id')->on('kode_bagan')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_status')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_nomorSp')->references('id')->on('nomor_sp')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('_karyawan_pkwt');
    }
}
