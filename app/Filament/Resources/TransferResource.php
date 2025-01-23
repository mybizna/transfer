<?php

namespace Modules\Transfer\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Transfer\Models\Transfer;

class TransferResource extends BaseResource
{
    protected static ?string $model = Transfer::class;

    protected static ?string $slug = 'transfer/transfer';

    protected static ?string $navigationGroup = 'Transfer';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
