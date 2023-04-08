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
        Schema::create('iiko_remains', function (Blueprint $table) {
            $table->id();
            $table->string('Склад');
            $table->string('Группа');
            $table->integer('Артикул');
            $table->string('Наименование');
            $table->string('Категория');
            $table->string('Ед измерения');
            $table->float('Себестоимость р');
            $table->float('Себестоимость за ед р');
            $table->float('Количество');
            $table->float('Максимум');
            $table->float('Минимум');
            $table->string('name');
            $table->string('SKU');
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
        Schema::dropIfExists('iiko_remains');
    }
};
