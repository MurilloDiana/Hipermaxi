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
        Schema::create('faltajustificadas', function (Blueprint $table) {
            $table->id('id_faltajusti');
            $table->date('fecha_falta');
            $table->string('Descripcion_falta');
            $table->binary('file')->nullable();
            $table->unsignedBigInteger('cod_emp')->unsigned();
            $table->timestamps();
            $table->foreign('cod_emp')->references('CODIGO')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faltajustificadas');
    }
};
