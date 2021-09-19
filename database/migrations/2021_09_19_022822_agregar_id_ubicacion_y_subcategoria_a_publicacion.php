<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarIdUbicacionYSubcategoriaAPublicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('publicacions', function (Blueprint $table) {
            $table->bigInteger('ubicacion_id')->unsigned()->nullable()
                ->after('publicacion_precio');

            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')
                ->onDelete('set null')
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
        //
    }
}
