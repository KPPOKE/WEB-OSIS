<?php

namespace App\Filament\Resources\Eskuls\Pages;

use App\Filament\Resources\Eskuls\EskulResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEskul extends EditRecord
{
    protected static string $resource = EskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
