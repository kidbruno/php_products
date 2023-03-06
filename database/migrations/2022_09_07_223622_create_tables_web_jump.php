<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('categoria_id');
            $table->string('nome');
            $table->timestamps();
        });

        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('produto_id');
            $table->integer('sku');
            $table->string('email');
            $table->string('nome');
            $table->decimal('preco');
            $table->string('descricao');
            $table->integer('quantidade');
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('categoria_id')->on('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos', 'categorias');
    }
};
