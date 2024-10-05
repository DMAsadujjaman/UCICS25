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
        Schema::create('cam_ready_subs', function (Blueprint $table) {
            $table->id();
            $table->string('image_1')->nullable();
            $table->string('title');
            $table->text('text_1');
            $table->string('image_2')->nullable();
            $table->text('text_2')->nullable();
            $table->string('image_3')->nullable();
            $table->text('text_3')->nullable();
            $table->text('page');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cam_ready_subs');
    }
};
