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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('mobile')->nullable();
            $table->string('youtube')->nullable();
            $table->text('map')->nullable();
            $table->text('aboutlogo')->nullable();
            $table->text('rights')->nullable();
            $table->string('contact_name')->nullable();
            $table->text('cdept')->nullable();
            $table->text('ctel')->nullable();
            $table->text('cmail')->nullable();
            $table->string('contact_name1')->nullable();
            $table->text('cdept1')->nullable();
            $table->text('ctel1')->nullable();
            $table->text('cmail1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
