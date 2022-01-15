<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosiKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promosi_karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan')->unsigned();
            $table->integer('id_unitKerja')->unsigned();
            $table->string('sertifikasi_lsp');
            $table->string('no_sertifikasi');
            $table->string('file_sertifikasi');
            $table->string('nilai_kedisiplinan');
            $table->string('nilai_kepatuhan');
            $table->string('nilai_sikapKerja');
            $table->string('nilai_inisiatif');

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
        Schema::dropIfExists('promosi_karyawan');
    }
}
