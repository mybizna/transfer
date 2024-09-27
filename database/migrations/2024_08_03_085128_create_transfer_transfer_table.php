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
            $table->foreignId('currency_id')->nullable()->constrained('core_currency')->onDelete('set null');
            $table->string('token')->nullable();
            $table->longText('description')->nullable();
            $table->longText('params')->nullable();
            $table->boolean('is_canceled')->nullable()->default(false);
            $table->foreignId('from_partner_id')->nullable()->constrained('partner_partner')->onDelete('set null');
            $table->foreignId('to_partner_id')->nullable()->constrained('partner_partner')->onDelete('set null');
            $table->foreignId('gateway_id')->nullable()->constrained('account_gateway')->onDelete('set null');

            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
            $table->softDeletes();
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
