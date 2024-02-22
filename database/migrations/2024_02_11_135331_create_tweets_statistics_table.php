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
        Schema::create('tweets_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('likes')->default(0);
            $table->string('views')->default(0);

            $table->foreignId('tweet_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets_statistics');
    }
};
