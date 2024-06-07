<?php

namespace App\Filament\Resources\PasajeroResource\Pages;

use App\Filament\Resources\PasajeroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPasajero extends EditRecord
{
    protected static string $resource = PasajeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
