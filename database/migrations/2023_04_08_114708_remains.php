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
        Schema::create('remains', function (Blueprint $table) {
            $table->id();
            $table->string('ostatki')->nullable();
            $table->string('name')->nullable();
            $table->string('SKU')->nullable();
            $table->float('itog')->nullable();
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
        Schema::dropIfExists('remains');
    }
};
