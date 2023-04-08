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
            $table->string('Область работы');
            $table->string('Город');
            $table->string('Бренд');
            $table->string('Юр лицо');
            $table->string('Кофейня');
            $table->string('Категория номенклатуры');
            $table->string('Элемент номенклатуры iiko');
            $table->string('Одобренные поставщики')->nullable();
            $table->float('Еденица измерения с учетом размера упаковки');
            $table->float('Рекоменд заказ при t-ре выше 22˚');
            $table->float('Рекоменд заказ при t-ре ниже 22˚');
            $table->float('Целевая цена')->nullable();
            $table->string('Поставщик')->nullable();
            $table->string('Элемент номенклатуры');
            $table->string('АВС')->nullable();
            $table->string('Остатки Версия Управ-х, ед изм')->nullable();
            $table->float('Осатки IIKO, ед изм');
            $table->float('Прогноз');
            $table->float('Прогноз, ед изм');
            $table->float('Заказ с учетом остков, ед изм');
            $table->string('Корректировка управляющего')->nullable();
            $table->string('Комментарий управляющего')->nullable();
            $table->string('Заказ с учетом корректировки управляющего')->nullable();
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
