<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAguasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aguas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('cargo_fijo');
            $table->float('valor_unitario');
            $table->integer('consumo');
            $table->integer('consumo_casa');
            $table->integer('recoleccion');
            $table->integer('tratamiento');
            $table->integer('subsidio');
            $table->integer('otro');
            $table->integer('total');
            $table->integer('total_casa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aguas');
    }
}
