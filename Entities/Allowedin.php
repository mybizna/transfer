<?php

namespace Modules\Transfer\Entities;

use Modules\Base\Entities\BaseModel;

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
