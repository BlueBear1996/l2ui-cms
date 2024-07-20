<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('server_databases', function (Blueprint $table) {
            $table->id();
            $table->integer('server_id')->comment('Идентификатор сервера');
            $table->string('driver')->comment('Драйвер базы данных');
            $table->string('host')->comment('Хост базы данных');
            $table->string('port')->comment('Порт базы данных');
            $table->string('name')->comment('Имя базы данных');
            $table->string('user')->comment('Пользователь базы данных');
            $table->string('password')->comment('Пароль базы данных');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('server_databases');
    }
};
