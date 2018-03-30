<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaverdeContactoFormularioCampoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaverde_contacto_formulario_campo', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('formulario_id')->unsigned()->index();
            $table->integer('campo_id')->unsigned()->index();

            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->text('valor')->nullable();
            $table->boolean('required')->default(1);
            
            $table->foreign('formulario_id')->references('id')->on('cajaverde_contacto_formularios')->onDelete('cascade');
            $table->foreign('campo_id')->references('id')->on('cajaverde_contacto_campos')->onDelete('cascade');
            
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
        Schema::dropIfExists('cajaverde_contacto_formulario_campo');
    }
}
