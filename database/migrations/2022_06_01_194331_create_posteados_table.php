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
        Schema::create('posteados', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->id(); 
            $table->string('pos_img');
            $table->string('pos_imgtitulo',25);
            $table->string('pos_titulo',25);
            $table->text('pos_contenido');
            $table->date('pos_fecha');
            $table->bigInteger('id_perfiles')->unsigned();
            $table->bigInteger('id_clasificados')->unsigned();
            
            $table->timestamps();
            $table->foreign('id_clasificados')->references('id')->on('clasificados')->onDelete("cascade");
            $table->foreign('id_perfiles')->references('id')->on('perfiles')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posteados');
    }
};
