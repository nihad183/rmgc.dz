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
    Schema::table('news', function (Blueprint $table) {
        $table->text('summary')->nullable()->after('content');
        $table->text('subtext')->nullable()->after('summary');
        $table->text('centertext')->nullable()->after('subtext');
        $table->json('gallery')->nullable()->after('centertext'); 
    });
}

public function down(): void
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn(['summary', 'subtext', 'centertext', 'gallery']);
    });
}

};
