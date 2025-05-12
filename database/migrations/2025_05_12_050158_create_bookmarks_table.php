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
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->comment('ブックマークテーブル');
            $table->id()->comment('ブックマークID');
            $table->timestamps();
            $table->foreignId('post_id')->comment('投稿ID')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->comment('ユーザーID')->constrained()->cascadeOnDelete();
            $table->boolean('is_public')->default(false)->comment('公開しているかどうか');
            $table->string('title')->comment('タイトル');
            $table->unsignedBigInteger('created_by')->comment('作成者');
            $table->unsignedBigInteger('updated_by')->comment('更新者');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};
