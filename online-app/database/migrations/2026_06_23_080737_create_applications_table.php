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

            // who applied
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            // which job applied
            $table->foreignId('job_id')
                ->constrained('jobs')
                ->onDelete('cascade');

            // application details
            $table->text('cover_letter')->nullable();
            $table->string('cv')->nullable(); // file path

            // status tracking
            $table->string('status')->default('pending'); 
            // pending, accepted, rejected

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};