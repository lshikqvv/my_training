<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->comment('管理者テーブル');
            $table->id()->comment('管理者ID');
            $table->timestamps();
            $table->unsignedTinyInteger('status')->default(0)->comment('ステータス');
            $table->string('first_name', 255)->comment('姓');
            $table->string('last_name', 255)->comment('名');
            $table->string('email', 255)->comment('メールアドレス')->unique();
            $table->string('password', 255)->comment('パスワード');
            $table->unsignedBigInteger('created_by')->comment('作成者');
            $table->unsignedBigInteger('updated_by')->comment('更新者');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
