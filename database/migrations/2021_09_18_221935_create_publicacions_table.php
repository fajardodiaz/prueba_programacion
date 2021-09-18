<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id('publicacion_id');

            $table->string('publicacion_titulo');
            $table->smallInteger('ubicacion_id');
            $table->text('publicacion_descripcion');
            $table->decimal('publicacion_precio',8,2);
            $table->smallInteger('subcategoria_id');

            $table->timestamps();

            $table->foreign('ubicacion_id')->references('ubicacion_id')->on('ubicacions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('subcategoria_id')->references('subcategoria_id')->on('subcategorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacions');
    }
}
