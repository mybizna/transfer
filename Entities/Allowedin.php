<?php

namespace Modules\Transfer\Models;

use Modules\Base\Models\BaseModel;

class Allowedin extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'country_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "transfer_allowedin";

}
