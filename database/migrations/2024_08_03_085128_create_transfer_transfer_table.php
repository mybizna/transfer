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
            $table->string('currency_id')->nullable();
            $table->string('token')->nullable();
            $table->longText('description')->nullable();
            $table->longText('params')->nullable();
            $table->boolean('is_canceled')->nullable()->default(false);
            $table->integer('from_partner_id')->nullable();
            $table->integer('to_partner_id')->nullable();
            $table->bigInteger('gateway_id')->nullable();

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
