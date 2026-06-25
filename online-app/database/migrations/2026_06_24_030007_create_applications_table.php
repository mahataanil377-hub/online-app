<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            // Job relation
            $table->foreignId('job_id')
                  ->constrained('jobs')
                  ->onDelete('cascade');

            // Applicant info (user login system छैन भने)
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();

            // Resume file
            $table->string('resume')->nullable();

            // Cover letter
            $table->text('cover_letter')->nullable();

            // Status (pending, accepted, rejected)
            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};