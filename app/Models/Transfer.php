<?php

namespace Modules\Transfer\Models;

use Modules\Account\Models\Gateway;
use Modules\Base\Models\BaseModel;
use Modules\Partner\Models\Partner;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transfer extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'amount', 'currency', 'token', 'description', 'params', 'is_canceled', 'from_partner_id', 'gateway_id', 'to_partner_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "transfer_transfer";

    /**
     * Add relationship to Gateway
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gateway(): BelongsTo
    {
        return $this->belongsTo(Gateway::class);
    }

    /**
     * Add relationship to Partner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromPartner(): BelongsTo
    {
        return $this->belongsTo('Modules\Partner\Models\Partner', 'from_partner_id');
    }

    /**
     * Add relationship to Partner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toPartner(): BelongsTo
    {
        return $this->belongsTo('Modules\Partner\Models\Partner', 'to_partner_id');
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->decimal('amount', 11)->nullable();
        $table->foreignId('currency_id')->nullable()->constrained(table: 'core_currency')->onDelete('set null');
        $table->string('token')->nullable();
        $table->longText('description')->nullable();
        $table->longText('params')->nullable();
        $table->boolean('is_canceled')->nullable()->default(false);
        $table->foreignId('from_partner_id')->nullable()->constrained(table: 'partner_partner')->onDelete('set null');
        $table->foreignId('to_partner_id')->nullable()->constrained(table: 'partner_partner')->onDelete('set null');
        $table->foreignId('gateway_id')->nullable()->constrained(table: 'account_gateway')->onDelete('set null');

    }
}
