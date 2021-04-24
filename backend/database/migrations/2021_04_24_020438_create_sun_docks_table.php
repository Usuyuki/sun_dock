<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSunDocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sun_docks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("content")->comment("本文");
            $table->unsignedBigInteger("reaction_count_cheer");
            $table->unsignedBigInteger("reaction_count_tear");
            $table->unsignedBigInteger("identifier_id");
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
        Schema::dropIfExists('sun_docks');
    }
}