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
        Schema::create('delivery_plans', function (Blueprint $table) {
            $table->id();
            $table->string('Юр лицо')->nullable();
            $table->string('Кофейня')->nullable();
            $table->string('Поставщик')->nullable();
            $table->dateTime('ПН')->nullable();
            $table->dateTime('ВТ')->nullable();
            $table->dateTime('СР')->nullable();
            $table->dateTime('ЧТ')->nullable();
            $table->dateTime('ПТ')->nullable();
            $table->dateTime('СБ')->nullable();
            $table->dateTime('ВС')->nullable();
            $table->string('Кофейня Итог')->nullable();
            $table->string('Общий Итог')->nullable();
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
        Schema::dropIfExists('delivery_plans');
    }
};
