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
        Schema::create('expenses-arrival_of_goods_by_day', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('gruppa')->nullable();
            $table->string('kategorya')->nullable();
            $table->string('kategorya_2')->nullable();
            $table->string('SKU')->nullable();
            $table->string('znacheniya')->nullable();
            $table->datetime('pn')->nullable(); 
            $table->datetime('vt')->nullable();
            $table->datetime('sr')->nullable();
            $table->datetime('cht')->nullable();
            $table->datetime('pt')->nullable();
            $table->datetime('sb')->nullable();
            $table->datetime('vs')->nullable();
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
        Schema::dropIfExists('expenses-arrival_of_goods_by_day');
    }
};
