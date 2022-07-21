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
        Schema::create('memoranda', function (Blueprint $table) {
            $table->id('id_me');    
            $table->date('fecha');
            $table->string('descripcion');
            $table->bigInteger('id_emp')->unsigned();
            $table->bigInteger('id_falta')->unsigned();
            $table->foreign('id_emp')->references('CODIGO')->on('empleados');
            $table->foreign('id_falta')->references('id')->on('faltas');
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
        Schema::dropIfExists('memoranda');
    }
};
