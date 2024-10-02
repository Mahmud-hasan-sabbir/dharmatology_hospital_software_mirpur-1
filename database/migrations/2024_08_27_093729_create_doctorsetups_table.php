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
        Schema::create('doctorsetups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->string('degree')->nullable();
            $table->string('phone')->nullable();
            $table->string('room_no')->nullable();
            $table->string('visiting_hour_start')->nullable();
            $table->string('visiting_hour_end')->nullable();
            $table->string('fee')->nullable();
            $table->string('status')->nullable();
            $table->text('remarks')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctorsetups');
    }
};
