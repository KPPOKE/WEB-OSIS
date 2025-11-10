<?php

namespace App\Filament\Resources\Eskuls;

use App\Filament\Resources\Eskuls\Pages\CreateEskul;
use App\Filament\Resources\Eskuls\Pages\EditEskul;
use App\Filament\Resources\Eskuls\Pages\ListEskuls;
use App\Filament\Resources\Eskuls\Schemas\EskulForm;
use App\Filament\Resources\Eskuls\Tables\EskulsTable;
use App\Models\Eskul;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class EskulResource extends Resource
{
    protected static ?string $model = Eskul::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Eskul';

    public static function form(Schema $schema): Schema
    {
        return $schema
        ->schema([
        TextInput::make('title')
        ->label("Nama Eskul"),
        TextInput::make('slug')
          ->unique(),
         TextInput::make('body')
          ->label("Text")          
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')
                ->label("Nama Eskul"),
            TextColumn::make('slug')
                 ->label("judul-pendek"),
            TextColumn::make('body')
             ->label("Definisi")
        ]);
       
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
            'index' => ListEskuls::route('/'),
            'create' => CreateEskul::route('/create'),
            'edit' => EditEskul::route('/{record}/edit'),
        ];
    }
}
