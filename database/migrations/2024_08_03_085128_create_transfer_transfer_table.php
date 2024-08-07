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
        Schema::create('transfer_transfer', function (Blueprint $table) {
            $table->id();

            $table->decimal('amount', 11)->nullable();
            $table->foreignId('currency_id')->nullable();
            $table->string('token')->nullable();
            $table->longText('description')->nullable();
            $table->longText('params')->nullable();
            $table->boolean('is_canceled')->nullable()->default(false);
            $table->foreignId('from_partner_id')->nullable();
            $table->foreignId('to_partner_id')->nullable();
            $table->foreignId('gateway_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_transfer');
    }
};
