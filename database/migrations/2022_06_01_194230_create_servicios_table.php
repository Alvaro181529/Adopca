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
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();   

            $table->string('ser_nombre',25);
            $table->text('pos_descripcion');
            $table->bigInteger('id_tipo')->unsigned();

            $table->timestamps();
            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};
