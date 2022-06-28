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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id('id_p');
            $table->date('FECHA_INI');
            $table->date('FECHA_FIN');
            $table->STRING('ASUNTO',100);
            $table->unsignedBigInteger('DIAS');
            $table->unsignedBigInteger('ID_permiso_emp');
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
        Schema::dropIfExists('permisos');
    }
};
