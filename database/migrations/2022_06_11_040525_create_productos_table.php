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
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->id();
            $table->string('prod_nombre', 30);
            $table->integer('prod_precio');
            $table->char('prod_moneda', 10);
            $table->integer('prod_cantidad');
            $table->text('prod_descripcion');
            $table->bigInteger('id_serperfiles')->unsigned();
            $table->bigInteger('id_categorias')->unsigned();

            $table->timestamps();
            $table->foreign('id_serperfiles')->references('id')->on('servicioperfiles')->onDelete("cascade");
            $table->foreign('id_categorias')->references('id')->on('categorias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
