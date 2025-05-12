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
        Schema::create('posts', function (Blueprint $table) {
            $table->comment('投稿テーブル');
            $table->id()->comment('投稿ID');
            $table->timestamps();
            $table->foreignId('category_id')->comment('カテゴリID')->constrained()->cascadeOnDelete();
            $table->foreignId('post_tag_id')->comment('投稿タグID')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->comment('ユーザーID')->constrained()->cascadeOnDelete();
            $table->string('title')->comment('タイトル');
            $table->text('body')->comment('本文');
            $table->unsignedBigInteger('created_by')->comment('作成者');
            $table->unsignedBigInteger('updated_by')->comment('更新者');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
