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
        Schema::create('final_order', function (Blueprint $table) {
            $table->id();
            $table->string('kofeinya')->nullable();
            $table->string('postavshik')->nullable();
            $table->string('element_nomenklatyri')->nullable();
            $table->integer('celevaya')->nullable();
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
        Schema::dropIfExists('final_order');
    }
};
