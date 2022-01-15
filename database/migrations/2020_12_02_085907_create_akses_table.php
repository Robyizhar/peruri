<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akses', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('level_user_id');
            $table->foreign('level_user_id')->references('id')->on('level_users');
            $table->unsignedbigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menu');

            $table->integer('akses');
            $table->integer('insert');
            $table->integer('update');
            $table->integer('delete');
            
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
        Schema::dropIfExists('akses');
    }
}
