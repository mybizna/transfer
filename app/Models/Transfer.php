<?php
namespace Modules\Transfer\Models;

use Base\Casts\Money;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Modules\Account\Models\Gateway;
use Modules\Base\Models\BaseModel;
use Modules\Partner\Models\Partner;

class Transfer extends BaseModel
{

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'total' => Money::class, // Use the custom MoneyCast
    ];
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

        $table->integer('amount')->nullable();
        $table->string('currency')->default('USD');
        $table->unsignedBigInteger('currency_id')->nullable();
        $table->string('token')->nullable();
        $table->longText('description')->nullable();
        $table->longText('params')->nullable();
        $table->boolean('is_canceled')->nullable()->default(false);
        $table->unsignedBigInteger('from_partner_id')->nullable();
        $table->unsignedBigInteger('to_partner_id')->nullable();
        $table->unsignedBigInteger('gateway_id')->nullable();
    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('currency_id')->references('id')->on(table: 'core_currency')->onDelete('set null');
        $table->foreign('from_partner_id')->references('id')->on(table: 'partner_partner')->onDelete('set null');
        $table->foreign('to_partner_id')->references('id')->on(table: 'partner_partner')->onDelete('set null');
        $table->foreign('gateway_id')->references('id')->on(table: 'account_gateway')->onDelete('set null');
    }
}
