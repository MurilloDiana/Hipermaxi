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
        Schema::create('fkpides', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_EMP');
            $table->unsignedBigInteger('ID_PERM');
            $table->timestamps();
           // $table->foreign('ID_EMP')->references('CODIGO')->on('empleados');
           // $table->foreign('ID_PERM')->references('id_p')->on('permisos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fkpides');
    }
};
