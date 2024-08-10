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
        Schema::create('transfer_allowedin', function (Blueprint $table) {
            $table->id();

            $table->foreignId('country_id')->constrained('core_country')->onDelete('cascade')->nullable()->index('transfer_allowedin_country_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_allowedin');
    }
};
