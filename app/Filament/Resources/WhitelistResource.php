<?php

namespace Modules\Transfer\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Transfer\Models\Whitelist;

class WhitelistResource extends BaseResource
{
    protected static ?string $model = Whitelist::class;

    protected static ?string $slug = 'transfer/whitelist';

    protected static ?string $navigationGroup = 'Transfer';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
