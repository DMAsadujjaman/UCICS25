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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('about');
            $table->string('submission_date');
            $table->string('acceptance_date');
            $table->string('cam_submission_date');
            $table->string('registration_date');
            $table->string('conference_date');

            $table->string('submission_date_final')->nullable();
            $table->string('acceptance_date_final')->nullable();
            $table->string('cam_submission_date_final')->nullable();
            $table->string('registration_date_final')->nullable();
            $table->string('conference_date_final')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
