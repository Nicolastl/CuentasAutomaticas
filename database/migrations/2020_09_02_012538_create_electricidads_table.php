<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectricidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricidads', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('valor_total');
            $table->integer('admin');
            $table->integer('otro');
            $table->integer('cordinacion');
            $table->integer('consumo_casa');
            $table->integer('kwhtotal');
            $table->integer('electricidad');
            $table->integer('valor_casa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electricidads');
    }
}
