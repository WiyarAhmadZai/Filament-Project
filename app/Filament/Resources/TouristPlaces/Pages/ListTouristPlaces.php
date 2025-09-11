<?php

namespace App\Filament\Resources\TouristPlaces\Pages;

use App\Filament\Resources\TouristPlaces\TouristPlaceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTouristPlaces extends ListRecords
{
    protected static string $resource = TouristPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
