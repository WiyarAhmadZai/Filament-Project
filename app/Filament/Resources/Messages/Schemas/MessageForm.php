<?php

namespace App\Filament\Resources\Messages\Schemas;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('sender_id')
                    ->label('Sender')
                    ->options(User::all()->pluck('name', 'id'))
                    ->required(),
                
                Select::make('recipient_id')
                    ->label('Recipient')
                    ->options(User::all()->pluck('name', 'id'))
                    ->required(),
                
                Textarea::make('content')
                    ->label('Message Content')
                    ->required()
                    ->rows(4),
                
                Toggle::make('is_broadcast')
                    ->label('Broadcast Message')
                    ->default(false),
            ]);
    }
}