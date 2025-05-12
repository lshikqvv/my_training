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
        Schema::create('prefecture', function (Blueprint $table) {
            $table->comment('都道府県マスタ');
            $table->id()->comment('都道府県ID');
            $table->timestamps();
            $table->string('name', 20)->comment('都道府県名');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prefecture');
    }
};
