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
        Schema::create('reg_forms', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('university');
            $table->string('uid')->nullable()->comment('id card');
            $table->string('uiid')->nullable()->comment('id card image');
            $table->string('semester')->nullable();
            $table->boolean('student')->comment('Student or not');
            
            $table->string('email1');
            $table->string('phone1');
            $table->string('email2')->nullable()->comment('alternative');
            $table->string('phone2')->nullable()->comment('alternative');
            $table->longText('address');
            $table->string('country'); // Changed from longText to string
            
            $table->integer('paper_id'); // Changed int to integer
            $table->string('paper_title');
            $table->string('scope');
            $table->string('payment_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_forms');
    }
};
