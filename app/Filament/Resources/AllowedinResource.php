<?php

namespace Modules\Transfer\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Transfer\Models\Allowedin;

class AllowedinResource extends BaseResource
{
    protected static ?string $model = Allowedin::class;

    protected static ?string $slug = 'transfer/alllowedin';

    protected static ?string $navigationGroup = 'Transfer';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
