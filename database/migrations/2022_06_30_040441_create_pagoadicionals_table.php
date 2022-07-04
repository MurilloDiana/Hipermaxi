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
            Schema::create('pagoadicionals', function (Blueprint $table) {
                $table->id('id_pago');
                $table->time('tiempo_extra');
                $table->float('totalHorasExtras');
                $table->date('fecha_feriados')->nullable();
                $table->float('totalFeriado');
                $table->float('BonoAntiguedad');
                $table->float('BonoTotal');
                $table->bigInteger('id_ig')->unsigned();
                $table->bigInteger('id_pa_emp')->unsigned();
                //$table->foreign('id_ig')->references('id_ingreso')->on('ingresos');
                //$table->foreign('id_pa_emp')->references('CODIGO')->on('empleados');
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
        Schema::dropIfExists('pagoadicionals');
    }
};
