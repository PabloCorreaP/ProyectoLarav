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
       Schema::create('libros', function (Blueprint $table) {
        $table->engine="InnoDB";//Nos permite borrar en cascada,
        // si borramos un autor se borraran los libros asociados a este   
        $table->bigIncrements('id');//Añadimos la columna id, clave primaria
        $table->bigInteger("autor_id")->unsigned();//Añadimos la columna autor id
        $table->string("nombre");//Añadimos la columna nombre
        $table->timestamps();
        $table->foreign("autor_id")->references("id")->on("autores")->onDelete("cascade");
        //relacionamos la columna autor id  con la columna 
        //id en autores y establecemos el borrado en cascada
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
