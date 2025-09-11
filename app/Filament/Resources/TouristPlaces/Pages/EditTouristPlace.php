<?php

namespace App\Filament\Resources\TouristPlaces\Pages;

use App\Filament\Resources\TouristPlaces\TouristPlaceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTouristPlace extends EditRecord
{
    protected static string $resource = TouristPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
