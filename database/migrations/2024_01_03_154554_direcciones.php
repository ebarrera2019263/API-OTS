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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('Numero');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Nit');
            $table->string('Direccion');
            $table->string('Indicacion')->nullable();
            $table->string('Pais');
            $table->string('Departamento');
            $table->string('Ciudad');
            $table->string('Municipio');
            $table->string('email');
            $table->string('id_tienda');
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
        Schema::dropIfExists('direcciones');
    }
};
