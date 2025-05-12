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
        Schema::create('email_verifications', function (Blueprint $table) {
            $table->comment('メールアドレス認証テーブル');
            $table->id()->comment('メールアドレス認証ID');
            $table->timestamps();
            $table->string('email')->comment('メールアドレス');
            $table->string('verification_code')->comment('認証コード');
            $table->dateTime('expired_at')->comment('有効期限');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_verifications');
    }
};
