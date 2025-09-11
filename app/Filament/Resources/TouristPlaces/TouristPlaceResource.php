<?php

namespace App\Filament\Resources\TouristPlaces;

use App\Filament\Resources\TouristPlaces\Pages\CreateTouristPlace;
use App\Filament\Resources\TouristPlaces\Pages\EditTouristPlace;
use App\Filament\Resources\TouristPlaces\Pages\ListTouristPlaces;
use App\Filament\Resources\TouristPlaces\Schemas\TouristPlaceForm;
use App\Filament\Resources\TouristPlaces\Tables\TouristPlacesTable;
use App\Models\TouristPlace;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TouristPlaceResource extends Resource
{
    protected static ?string $model = TouristPlace::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TouristPlaceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TouristPlacesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTouristPlaces::route('/'),
            'create' => CreateTouristPlace::route('/create'),
            'edit' => EditTouristPlace::route('/{record}/edit'),
        ];
    }
}
