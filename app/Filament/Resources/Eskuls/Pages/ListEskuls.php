<?php

namespace App\Filament\Resources\Eskuls\Pages;

use App\Filament\Resources\Eskuls\EskulResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEskuls extends ListRecords
{
    protected static string $resource = EskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
