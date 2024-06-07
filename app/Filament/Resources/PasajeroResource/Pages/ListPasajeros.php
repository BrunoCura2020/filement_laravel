<?php

namespace App\Filament\Resources\PasajeroResource\Pages;

use App\Filament\Resources\PasajeroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPasajeros extends ListRecords
{
    protected static string $resource = PasajeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
