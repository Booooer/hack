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
        Schema::create('work_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('Город');
            $table->string('Бренд');
            $table->string('Юр_лицо');
            $table->string('Кофейня');
            $table->string('Категория_номенклатуры');
            $table->string('Элемент_номенклатуры_iiko');
            $table->string('Одобренные_поставщики')->nullable();
            $table->float('Единица_измерения_с_учетом_размера_упаковки');
            $table->float('Рекоменд_заказ_при_t_ре_выше_22˚');
            $table->float('Рекоменд_заказ_при_t_ре_ниже_22˚');
            $table->float('Целевая_цена')->nullable();
            $table->string('Поставщик')->nullable();
            $table->string('Элемен_номенклатуры');
            $table->string('АВС')->nullable();
            $table->string('Остатки_Версия_Управ_х_ед_изм')->nullable();
            $table->float('Остатки_IIKO_ед_изм');
            $table->float('Прогноз');
            $table->float('Прогноз_ед_изм');
            $table->float('Заказ_с_учетом_остатков_ед_изм');
            $table->string('Корректировка_управляющего')->nullable();
            $table->string('Комментарий_управляющего')->nullable();
            $table->string('Заказ_с_учетом_корректировки_управляющего')->nullable();
            $table->dateTime('ПН')->nullable();
            $table->dateTime('ВТ')->nullable();
            $table->dateTime('СР')->nullable();
            $table->dateTime('ЧТ')->nullable();
            $table->dateTime('ПТ')->nullable();
            $table->dateTime('СБ')->nullable();
            $table->dateTime('ВС')->nullable();
            $table->string('Проверка')->nullable();
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
        Schema::dropIfExists('work_spaces');
    }
};
