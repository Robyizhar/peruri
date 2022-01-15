<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('np');
            $table->string('full_name');
            $table->string('tanggal_lahir');
            $table->string('tanggal_masuk');
            $table->string('tanggal_pensiun');
            $table->string('tanggal_mpp');
            $table->boolean('status_pensiun')->default(0);
            $table->string('kode_unit_kerja');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('id_grade_jabatan');
            $table->unsignedBigInteger('pangkat_id');
            $table->string('grade_pangkat');
            $table->dateTime('tmt_jabatan');
            $table->string('masa_jabatan');
           

            // $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('pangkat_id')->references('id')->on('pangkats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unit_kerja_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('posisi_id')->references('id')->on('posisi')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('karyawans');
    }
}
