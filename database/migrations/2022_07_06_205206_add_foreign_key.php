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
        Schema::table('users', function (Blueprint $table) {            
            $table->foreign('id')->references('CODIGO')->on('empleados');
        }); 

        Schema::table('contratos', function (Blueprint $table) {            
            $table->foreign('id')->references('CODIGO')->on('empleados');
        });

        Schema::table('empleados', function (Blueprint $table) {            
            $table->foreign('id_horario')->references('id')->on('horarios');
        });

        Schema::table('jornada_laborals', function (Blueprint $table) {            
            $table->foreign('id')->references('id')->on('users');
        });

        Schema::table('faltas', function (Blueprint $table) {            
            $table->foreign('id_empleado')->references('CODIGO')->on('empleados');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
