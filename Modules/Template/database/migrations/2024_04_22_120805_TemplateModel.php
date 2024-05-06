<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('templates_models', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique(); // Unique code to identify the template
            $table->string('description'); // Description of the template
            $table->json('meta')->nullable(); // Metadata as a JSON object
            $table->text('content'); // The HTML content of the template

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};