<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('condicions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('comercials', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen_principal');
            $table->string('precio_contado');
            $table->string('precio_financiado');
            $table->string('millaje');
            // $table->string('direccion');
            // $table->string('colonia');
            // $table->string('lat');
            // $table->string('lng');
            $table->string('telefono');
            $table->text('descripcion');
            $table->time('apertura');
            $table->time('cierre');
            $table->uuid('uuid');

            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->bigInteger('condicion_id')->unsigned();
            $table->bigInteger('modelo_id')->unsigned();

            $table->foreign('condicion_id')->references('id')->on('condicions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('modelo_id')->references('id')->on('modelos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('comercials');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('condicions');
        Schema::dropIfExists('modelos');
    }
}
