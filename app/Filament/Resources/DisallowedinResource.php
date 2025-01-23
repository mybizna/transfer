<?php

namespace Modules\Transfer\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Transfer\Models\Disallowedin;

class DisallowedinResource extends BaseResource
{
    protected static ?string $model = Disallowedin::class;

    protected static ?string $slug = 'transfer/disallowedin';

    protected static ?string $navigationGroup = 'Transfer';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
