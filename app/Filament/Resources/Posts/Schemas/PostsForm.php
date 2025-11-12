<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Set;
use Filament\Forms\Get;
use Illuminate\Support\Str;

class PostsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')
                ->label('Judul')
                ->live(onBlur: true)
                ->afterStateUpdated(function (string $state, Set $set) {
                    $set('slug', Str::slug($state));
                })
                ->required(),
            TextInput::make('slug')
                ->label('Slug')
                ->unique(ignoreRecord: true)
                ->live(false)
                ->validationMessages([
                    'unique' => 'Slug sudah digunakan.',
                ])
                ->required(),
            TextInput::make('author')->label('Penulis')->required(),
            Textarea::make('body')->label('Konten')->rows(8)->required(),
            Select::make('status')->label('Status')->options([
                'draft' => 'Draft',
                'published' => 'Terbit',
            ])->default('published')->required()
            ->afterStateUpdated(function (string $state, Set $set, Get $get) {
                if ($state === 'published' && empty($get('published_at'))) {
                    $set('published_at', now());
                }
            }),
            DateTimePicker::make('published_at')->label('Terbit Pada')->seconds(false),
            FileUpload::make('thumbnail')->label('Thumbnail')
                ->image()->disk('public')->directory('posts')
                ->imagePreviewHeight(140)
                ->maxSize(2048),
        ]);
    }
}
