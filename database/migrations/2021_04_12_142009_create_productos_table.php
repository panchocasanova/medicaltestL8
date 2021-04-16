<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigoProducto');
            $table->string('nombre', 200);
            $table->text('descripcion')->nullable();
            $table->integer('largo')->default(0);
            $table->integer('ancho')->default(0);
            $table->integer('alto')->default(0);
            $table->string('peso', 200)->default(0);
            $table->boolean('activo')->default(0);
            $table->bigInteger('categoria')->unsigned()->nullable();
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
        Schema::dropIfExists('productos');
    }
}
