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
        Schema::create('empleados', function (Blueprint $table) {    
            $table->id('CODIGO');                 
            $table->unsignedBigInteger('id_horario')->nullable();  
            $table->string('NOMBRE',50);
            $table->date('FECHA_NAC');
            $table->char('GENERO',1);
            $table->unsignedInteger('CI');
            $table->string('EMAIL');
            $table->unsignedInteger('TELEFONO');
            $table->string('DIRECCION',100);     

            $table->date('FECHA_ING');
            $table->string('AREA',100)->nullable();//nullable permite meter valores nulos                                    
            $table->rememberToken();
            $table->timestamps();

            /*
            para hacer foreign key en casaca
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->sofDeletes();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados'); 
    }
};
