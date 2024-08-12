<?php

namespace Modules\Transfer\Filament\Resources\TransferResource\Pages;

use Modules\Transfer\Filament\Resources\TransferResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransfers extends ListRecords
{
    protected static string $resource = TransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
