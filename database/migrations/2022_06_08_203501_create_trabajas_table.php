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
        Schema::create('trabajas', function (Blueprint $table) {
            $table->unsignedInteger('ID_JORNADA');
            $table->unsignedInteger('ID_EMP');
            $table->timestamps();
            #$table->foreign('ID_EMP')->references('CODIGO')->ON('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajas');
    }
};
