<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaverdeContactoMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaverde_contacto_mensajes', function (Blueprint $table) {

            $table->increments('id');

            $table->longtext('payload');
            $table->string('user_agent');
            $table->string('ip');

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
        Schema::dropIfExists('cajaverde_contacto_mensajes');
    }
}
