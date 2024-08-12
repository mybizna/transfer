<?php

namespace Modules\Transfer\Filament\Resources\AllowedinResource\Pages;

use Modules\Transfer\Filament\Resources\AllowedinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAllowedins extends ListRecords
{
    protected static string $resource = AllowedinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
