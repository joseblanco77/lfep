<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaverdeContactoFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaverde_contacto_formularios', function (Blueprint $table) {

            $table->increments('id');

            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('slug')->unique();
            $table->string('asunto');
            $table->text('ayuda')->nullable();

            $table->boolean('activo')->default(1);
            $table->boolean('accesible')->default(1);

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
        Schema::dropIfExists('cajaverde_contacto_formularios');
    }
}
