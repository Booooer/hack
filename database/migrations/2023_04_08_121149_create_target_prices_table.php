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
        Schema::create('target_prices', function (Blueprint $table) {
            $table->id();
            $table->string('Название');
            $table->string('Территория');
            $table->string('А/В');
            $table->string('Категория');
            $table->string('Ингредиент');
            $table->integer('Целевая цена руб');
            $table->string('Одобренные поставщики');
            $table->float('Упаковка');
            $table->integer('Минимальная заявка');
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
        Schema::dropIfExists('target_prices');
    }
};
