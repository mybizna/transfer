<?php

namespace Modules\Transfer\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class TransferPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Transfer';
    }

    public function getId(): string
    {
        return 'transfer';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
