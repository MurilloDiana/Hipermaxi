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
        Schema::create('retrasos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime('tiempo');
            $table->datetime('fecha');
            $table->integer('descuento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retrasos');
    }
};
