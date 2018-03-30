<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaverdePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaverde_paginas', function (Blueprint $table) 
        {
            $table->increments('id');
            
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable();
            $table->longtext('contenido')->nullable();
            $table->boolean('activa')->default(1);
            $table->integer('usuario_id')->unsigned();
            
            $table->string('meta_description')->nullable();
            $table->string('meta_author')->nullable();
            
            $table->nestedSet();
            $table->timestamps();

            $table->foreign('usuario_id', 'fk_pagina_usuario_idx')
                ->references('id')->on('cajaverde_users')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajaverde_paginas');
    }
}
