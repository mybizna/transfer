<?php

namespace Modules\Transfer\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Transfer\Models\Blacklist;

class BlacklistResource extends BaseResource
{
    protected static ?string $model = Blacklist::class;

    protected static ?string $slug = 'transfer/blacklist';

    protected static ?string $navigationGroup = 'Transfer';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
