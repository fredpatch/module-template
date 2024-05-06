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
        Schema::create('vacation_applications_models', function (Blueprint $table) {
            $table->id();
            
            $table->string('applicationName');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('recipientName');
            $table->string('dateDeparture');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacation_applications_models');
    }
};
