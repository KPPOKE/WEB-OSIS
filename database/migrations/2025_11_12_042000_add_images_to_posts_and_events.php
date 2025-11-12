<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('thumbnail')->nullable()->after('published_at');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->string('thumbnail')->nullable()->after('featured');
            $table->string('banner')->nullable()->after('thumbnail');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['thumbnail']);
        });

        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['thumbnail', 'banner']);
        });
    }
};
