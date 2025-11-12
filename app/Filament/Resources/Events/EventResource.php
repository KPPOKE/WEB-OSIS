<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Models\Event;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('title')
                ->label('Judul')
                ->live(onBlur: true)
                ->afterStateUpdated(function (string $state, Set $set) {
                    $set('slug', \Illuminate\Support\Str::slug($state));
                })
                ->required(),
            TextInput::make('slug')
                ->unique(ignoreRecord: true)
                ->live(false)
                ->validationMessages([
                    'unique' => 'Slug sudah digunakan.',
                ])
                ->required(),
            DateTimePicker::make('starts_at')->label('Mulai')->seconds(false)->required(),
            DateTimePicker::make('ends_at')->label('Selesai')->seconds(false),
            TextInput::make('location')->label('Lokasi'),
            Textarea::make('description')->label('Deskripsi')->rows(5),
            TextInput::make('status')->label('Status')->default('published'),
            Toggle::make('featured')->label('Sorotan'),
            FileUpload::make('thumbnail')->label('Thumbnail')
                ->image()->disk('public')->directory('events')
                ->imagePreviewHeight(140)
                ->maxSize(3072),
            FileUpload::make('banner')->label('Banner')
                ->image()->disk('public')->directory('events')
                ->imagePreviewHeight(140)
                ->maxSize(5120),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('thumbnail')->label('')
                ->circular()->height(32)->width(32),
            TextColumn::make('title')->label('Judul')->searchable()->sortable(),
            TextColumn::make('starts_at')->label('Mulai')->dateTime('d M Y H:i')->sortable(),
            TextColumn::make('location')->label('Lokasi')->toggleable(),
            TextColumn::make('status')->label('Status')->badge(),
            IconColumn::make('featured')->label('Sorotan')->boolean(),
        ])
        ->recordActions([
            \Filament\Actions\EditAction::make(),
            DeleteAction::make(),
        ])
        ->toolbarActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}
