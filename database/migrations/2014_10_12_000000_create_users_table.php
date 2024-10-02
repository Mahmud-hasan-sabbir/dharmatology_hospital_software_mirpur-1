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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('unique_patient_id')->unique()->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->decimal('height_feet', 3, 1)->nullable();
            $table->decimal('height_inches', 3, 1)->nullable();
            $table->decimal('weight_kg', 6, 2)->nullable();
            $table->decimal('weight_pounds', 6, 2)->nullable();
            $table->decimal('bmi', 5, 2)->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
