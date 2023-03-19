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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 60)->nullable();
            $table->string('lastName', 60)->nullable();
            $table->string('status', 60)->nullable();
            $table->string('country', 60)->nullable();
            $table->string('distric', 60)->nullable();
            $table->string('degree', 60)->nullable();
            $table->string('Speciality', 60)->nullable();
            $table->text('Chamber')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor');
    }
};
