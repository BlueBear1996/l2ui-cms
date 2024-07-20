<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Техническое название для маршрутизации');
            $table->string('title')->comment('Человеко понятное название сервера');
            $table->string('platform')->comment('Платформа сервера java/pts');
            $table->string('chronicle')->comment('Хроники сервера');
            $table->string('rate')->comment('Рейт сервера');
            $table->string('about')->comment('Краткая информация о сервера');
            $table->string('communication_type')->comment('Тип общения с сервером');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
