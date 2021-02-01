<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dudas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asunto');
            $table->string('contenido');
            $table->string('url',100)->default('image.jpg');
            $table->integer("user_id")->unsigned();//numeros positivos
            $table->foreign("user_id")->references("id")->on("users")
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
        Schema::dropIfExists('dudas');
    }
}
