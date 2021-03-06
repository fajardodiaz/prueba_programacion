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
            $table->id();

            $table->string('publicacion_titulo');
            // $table->integer('ubicacion_id');
            $table->text('publicacion_descripcion');
            $table->decimal('publicacion_precio',8,2)->nullable();
            // $table->integer('subcategoria_id_fk');

            $table->timestamps();

            // $table->foreignId('ubicacion_id_fk')->references('ubicacion_id')->on('ubicacions')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

            // $table->foreignId('subcategoria_id_fk')->references('subcategoria_id')->on('subcategorias')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
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
