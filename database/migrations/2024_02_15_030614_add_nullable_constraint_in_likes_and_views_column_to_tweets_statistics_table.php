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
        Schema::table('tweets_statistics', function (Blueprint $table) {
            $table->string('likes')->nullable(true)->change();
            $table->string('views')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tweets_statistics', function (Blueprint $table) {
            $table->string('likes')->nullable(false)->change();
            $table->string('views')->nullable(false)->change();
        });
    }
};
