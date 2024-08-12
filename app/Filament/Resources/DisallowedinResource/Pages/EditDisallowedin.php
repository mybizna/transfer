<?php

namespace Modules\Transfer\Filament\Resources\DisallowedinResource\Pages;

use Modules\Transfer\Filament\Resources\DisallowedinResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisallowedin extends EditRecord
{
    protected static string $resource = DisallowedinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
