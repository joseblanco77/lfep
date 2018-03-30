<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaverdeContactoEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajaverde_contacto_emails', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('email');
            $table->enum('tipo', [
                'to', 
                'cc', 
                'bcc'
            ]);
            $table->integer('formulario_id')->unsigned()->index();

            $table->foreign('formulario_id')->references('id')->on('cajaverde_contacto_formularios')->onDelete('cascade');

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
        Schema::dropIfExists('cajaverde_contacto_emails');
    }
}
