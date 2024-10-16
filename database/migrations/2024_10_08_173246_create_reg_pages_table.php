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
        Schema::create('reg_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('text1')->nullable();
            $table->string('table_title')->nullable();
            $table->string('cat')->nullable();
            $table->string('int')->nullable();
            $table->string('nat')->nullable();
            $table->string('note')->nullable();
            $table->text('text2')->nullable();
            $table->text('img1')->nullable();
            $table->text('img2')->nullable();
            $table->string('text3')->nullable();
            $table->text('text4')->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_pages');
    }
};
