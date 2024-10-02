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
        Schema::create('patientregistrations', function (Blueprint $table) {
            $table->id();
            $table->string('mrn')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('bill_no')->nullable();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('shift')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('consultent')->nullable();
            $table->string('occupation')->nullable();
            $table->string('type')->nullable();
            $table->text('address')->nullable();
            $table->string('area')->nullable();
            $table->string('district')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->integer('room_no')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('discoutn')->nullable();
            $table->integer('feestype')->nullable();
            $table->string('billreprint')->nullable();
            $table->string('preview')->nullable();
            $table->string('printtype')->nullable();
            $table->biginteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientregistrations');
    }
};
