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
        Schema::create('autores', function (Blueprint $table) {
            $table->engine="InnoDB";//Nos permite borrar en cascada,
            // si borramos un autor se borraran los libros asociados a este.
            $table->bigIncrements('id');
            $table->string("nombre");//Añadimos la collumna nombre
            $table->string("apellidos");//Añadimos la collumna apellidos
            $table->timestamps();//Añadimos la columna timestamps
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
