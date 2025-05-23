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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->comment('投稿タグテーブル');
            $table->id()->comment('投稿タグID');
            $table->timestamps();
            $table->foreignId('post_id')->comment('投稿ID')->constrained()->cascadeOnDelete();
            $table->foreignId('tag_id')->comment('タグID')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('created_by')->comment('作成者');
            $table->unsignedBigInteger('updated_by')->comment('更新者');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
