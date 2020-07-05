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
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('precio');
            $table->string('foto')->nullable();
            $table->bigInteger('id_subcategoria')->unsigned();
            $table->bigInteger('id_und_medida')->unsigned();
            $table->timestamps();
            $table->foreign('id_subcategoria')->references('id')->on('subcategorias');
            $table->foreign('id_und_medida')->references('id')->on('unidades_medidas');
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
