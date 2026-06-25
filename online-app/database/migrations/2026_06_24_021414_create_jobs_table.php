<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            // Company relation
            $table->foreignId('company_id')
                  ->constrained('companies')
                  ->onDelete('cascade');

            // Job details
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('job_type')->nullable(); // full-time, part-time, contract

            $table->integer('position')->nullable(); // number of vacancies
            $table->string('startup')->nullable(); // company/startup type info
            $table->string('experience')->nullable(); // e.g. 1-2 years, fresher
            $table->string('location')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};