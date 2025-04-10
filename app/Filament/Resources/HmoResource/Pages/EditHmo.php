<?php

namespace App\Filament\Resources\HmoResource\Pages;

use App\Filament\Resources\HmoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHmo extends EditRecord
{
    protected static string $resource = HmoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
