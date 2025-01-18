<?php

namespace Modules\Transfer\Models;

use Modules\Base\Models\BaseModel;
use Modules\Core\Models\Country;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;

class Disallowedin extends BaseModel
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
    protected $table = "transfer_disallowedin";

    /**
     * Add relationship to Country
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->foreignId('country_id')->nullable()->constrained('core_country')->onDelete('set null');
    }
}
