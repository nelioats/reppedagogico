<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuicoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->string('base');
            $table->string('disciplinaBNCC')->nullable();
            $table->string('curso')->nullable();
            $table->string('disciplinaBT')->nullable();
            $table->string('serie');
            $table->string('autores');
            $table->string('orientadores');
            $table->text('titulo');
            $table->text('assunto');
            $table->string('path_contribuicao');
            $table->string('ip');
            $table->timestamps();


            $table->foreign('user')->references('id')->on('users')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contribuicoes');
    }
};
