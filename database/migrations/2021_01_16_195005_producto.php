<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function(Blueprint $table)
    {
       $table->BigIncrements ('id');
       $table->String ('clave', 25);
       $table->String ('producto', 200);
       $table->unsignedBigInteger ('existencias');
       $table->float('precio_unitario', 10, 2 );
       $table->enum('unidad_medida',
       [
       'Pieza',
       'Caja',
       'Kilogramo',
       'Metro',
       'Bolsa',
       'Otro'
       ]
    );
    $table->enum('estatus',
       [
        'Activo',
       'Inactivo'
       ]
    );
    $table->timestamps();
    }
);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Producto');
    }


}
