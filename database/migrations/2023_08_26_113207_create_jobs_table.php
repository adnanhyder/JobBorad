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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_type');
            $table->string('city');
            $table->string('country');
            $table->float('min_salary');
            $table->float('max_salary');
            $table->string('education_level');
            $table->integer('min_experience');
            $table->integer('max_experience');
            $table->string('website');
            $table->string('company_name');
            $table->string('address');
            $table->string('email');
            $table->integer('phone');
            $table->string('gender');
            $table->string('shift');
            $table->text('bio');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('job_category_id')->nullable();
            $table->foreign('job_category_id')->references('id')->on('job_categories');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
