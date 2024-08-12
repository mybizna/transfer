<?php

namespace Modules\Transfer\Filament\Resources\AllowedinResource\Pages;

use Modules\Transfer\Filament\Resources\AllowedinResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAllowedin extends EditRecord
{
    protected static string $resource = AllowedinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}