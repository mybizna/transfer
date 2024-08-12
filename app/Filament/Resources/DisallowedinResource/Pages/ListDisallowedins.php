<?php

namespace Modules\Transfer\Filament\Resources\DisallowedinResource\Pages;

use Modules\Transfer\Filament\Resources\DisallowedinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisallowedins extends ListRecords
{
    protected static string $resource = DisallowedinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}