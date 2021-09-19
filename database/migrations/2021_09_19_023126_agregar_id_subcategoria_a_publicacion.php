<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarIdSubcategoriaAPublicacion extends Migration
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
            $table->bigInteger('subcategoria_id')->unsigned()->nullable()
                ->after('ubicacion_id');

            $table->foreign('subcategoria_id')->references('id')->on('publicacions')
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
