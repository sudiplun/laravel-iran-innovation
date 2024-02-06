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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64);
            $table->string('slug', 64);
            $table->string('author', 20);
            $table->string('thumbnail')->nullable();
            $table->longText('body');
            $table->string('comment', 2048)->nullable();
            $table->string('view')->nullable();
            $table->boolean('active');
            $table->datetime('published_at')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
