<?php

namespace App\Filament\Resources\Guides\Pages;

use App\Filament\Resources\Guides\GuideResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGuides extends ListRecords
{
    protected static string $resource = GuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
