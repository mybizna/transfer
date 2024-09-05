<?php

namespace Modules\Transfer\Models;

use Modules\Account\Models\Gateway;
use Modules\Base\Models\BaseModel;
use Modules\Partner\Models\Partner;

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
    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }

    /**
     * Add relationship to Partner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromPartner()
    {
        return $this->belongsTo('Modules\Partner\Models\Partner', 'from_partner_id');
    }

    /**
     * Add relationship to Partner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toPartner()
    {
        return $this->belongsTo('Modules\Partner\Models\Partner', 'to_partner_id');
    }

}
