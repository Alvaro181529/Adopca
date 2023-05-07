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
        Schema::create('perfiles', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();

            $table->string('per_titulo',25);
            $table->text('per_descripcion');
            $table->string('per_telefono',15);
            $table->string('per_imagen');
            $table->string('per_imagenbaner');
            $table->string('per_ubicacion');
            $table->string('per_ciudad',25);
            $table->bigInteger('id_users')->unsigned();
            $table->timestamps();
            $table-> foreign('id_users')->references('id')->on('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
};
