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
        Schema::create('DATA_consumption_of_goods_by_wee', function (Blueprint $table) {
            $table->id();
            $table->string('group')->nullable();
            $table->string('gorod')->nullable();
            $table->string('name')->nullable();
            $table->string('gruppa')->nullable();
            $table->string('kategoriya_3')->nullable();
            $table->string('kategoriya_nomenklatyri')->nullable();
            $table->string('element_nomenklaturi')->nullable();
            $table->float('1')->nullable();
            $table->float('2')->nullable();
            $table->float('3')->nullable();
            $table->float('4')->nullable();
            $table->string('teplo')->nullable();
            $table->string('adres')->nullable();
            $table->string('mesto_razgryzki')->nullable();
            $table->string('vremya_razgryzki')->nullable();
            $table->string('kontakti')->nullable();
            $table->float('edinica_ezmereniya_s_ychetom_rasmera_ypakovki')->nullable();
            $table->string('odobrennie_postavshiki');
            $table->float('celevaya_cena')->nullable();
            $table->float('srednii_rashod_za_4_nedeli')->nullable();
            $table->float('rekomendyemii_zakaz_pri_temperatyre_vishe_22')->nullable();
            $table->float('rekomendyemii_zakaz_pri_temperatyre_nije_22')->nullable();
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
        Schema::dropIfExists('DATA_consumption_of_goods_by_wee');
    }
};
