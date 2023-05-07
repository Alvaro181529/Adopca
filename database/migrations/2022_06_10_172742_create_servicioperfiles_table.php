<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicioperfiles', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->id();
            $table->bigInteger('id_perfiles')->unsigned();
            $table->bigInteger('id_servicio')->unsigned();
            $table->timestamps();
            $table-> foreign('id_servicio')->references('id')->on('servicios')->onDelete("cascade");
            $table-> foreign('id_perfiles')->references('id')->on('perfiles')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicioperfiles');
    }
};
