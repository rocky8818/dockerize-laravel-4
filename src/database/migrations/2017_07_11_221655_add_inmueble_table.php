<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('tipo');
            $table->integer('categoria');
            $table->string('direccion');
            $table->string('cp');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');

            $table->decimal('latitud',20,14)->nullable();
            $table->decimal('longitud',20,14)->nullable();
            $table->integer('cuartos');
            $table->float('metros',10,6);
            $table->decimal(8,2)->nullable();
            $table->decimal('precio',10,2);

            $table->integer('portada')->nullable();
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
        Schema::dropIfExists('inmuebles');
    }
}
