<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('asunto');
          $table->string('contenido');
          $table->string('url',100)->default('image.jpg');
          $table->integer("user_id")->unsigned();
          $table->foreign("user_id")
                ->references("id")->on("users")
                ->onDelete("cascade");
          $table->integer("duda_id")->unsigned();
          $table->foreign("duda_id")
                ->references("id")->on("dudas")
                ->onDelete("cascade");
          $table->integer("respuesta_padre_id")->unsigned();
          $table->foreign("respuesta_padre_id")
                ->references("id")->on("respuestas")
                ->onDelete("cascade");
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
        Schema::dropIfExists('respuestas');
    }
}
