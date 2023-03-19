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
        Schema::create('appoiments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name', 60);
            $table->string('patient_mobile', 60);
            $table->string('patient_email', 60);
            $table->string('appoiment_date', 60);
            $table->bigInteger('doctor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoiments');
    }
};
