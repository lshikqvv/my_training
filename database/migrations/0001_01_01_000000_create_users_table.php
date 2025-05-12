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
        Schema::create('users', function (Blueprint $table) {
            $table->comment('ユーザーテーブル');
            $table->id()->comment('ユーザーID');
            $table->timestamps();
            $table->unsignedTinyInteger('status')->default(0)->comment('ステータス');
            $table->string('first_name')->comment('姓');
            $table->string('last_name')->comment('名');
            $table->string('email')->comment('メールアドレス')->unique();
            $table->timestamp('verified_at')->comment('メールアドレス認証日時')->nullable();
            $table->string('access_token')->comment('認証トークン')->nullable();
            $table->string('password')->comment('パスワード');
            $table->string('postal_code')->comment('郵便番号');
            $table->foreignId('prefecture_id')->comment('都道府県')->constrained()->cascadeOnDelete();
            $table->string('city')->comment('市区町村');
            $table->string('address')->comment('番地');
            $table->string('building')->nullable()->comment('建物名');
            $table->string('tel')->comment('電話番号');
            $table->unsignedBigInteger('created_by')->comment('作成者');
            $table->unsignedBigInteger('updated_by')->comment('更新者');
        });

        // Schema::create('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email')->primary();
        //     $table->string('token');
        //     $table->timestamp('created_at')->nullable();
        // });

        // Schema::create('sessions', function (Blueprint $table) {
        //     $table->string('id')->primary();
        //     $table->foreignId('user_id')->nullable()->index();
        //     $table->string('ip_address', 45)->nullable();
        //     $table->text('user_agent')->nullable();
        //     $table->longText('payload');
        //     $table->integer('last_activity')->index();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        // Schema::dropIfExists('password_reset_tokens');
        // Schema::dropIfExists('sessions');
    }
};
