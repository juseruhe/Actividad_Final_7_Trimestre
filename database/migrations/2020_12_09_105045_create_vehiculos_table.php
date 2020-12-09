<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('Placa')->unique();
            $table->bigInteger('Color_id')->unsigned();
            $table->bigInteger('Marca_id')->unsigned();
            $table->bigInteger('Tipo_Vehiculo_id')->unsigned();
            $table->bigInteger('Conductor_id')->unsigned();
            $table->bigInteger('Propietario_id')->unsigned();
            $table->foreign('Color_id')->references('id')->on('colores');
            $table->foreign('Marca_id')->references('id')->on('marcas');
            $table->foreign('Tipo_Vehiculo_id')->references('id')->on('tipo_vehiculos');
            $table->foreign('Conductor_id')->references('id')->on('conductores');
            $table->foreign('Propietario_id')->references('id')->on('propietarios');
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
        Schema::dropIfExists('vehiculos');
    }
}
