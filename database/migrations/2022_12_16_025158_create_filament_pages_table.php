<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('filament_pages', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->string('title');
            $table->longText('data')->nullable();
            $table->boolean('is_index')->nullable();
            $table->boolean('is_QrPage')->nullable();
            $table->dateTime('published_at');
            $table->dateTime('published_until')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('filament_pages');
    }
};
