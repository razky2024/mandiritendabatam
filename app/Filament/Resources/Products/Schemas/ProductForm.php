<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Services\ImageOptimizerService;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($set, $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Select::make('price_type')
                    ->options([
                        'fix' => 'Fix Price (Nominal Tetap)',
                        'custom' => 'Custom Quote (Estimasi/Custom)',
                    ])
                    ->default('fix')
                    ->required()
                    ->live(),
                TextInput::make('price')
                    ->numeric()
                    ->prefix('Rp')
                    ->visible(fn ($get) => $get('price_type') === 'fix'),
                TextInput::make('unit')
                    ->placeholder('Contoh: paket, unit/hari, m2')
                    ->maxLength(50),
                Textarea::make('short_description')
                    ->columnSpanFull()
                    ->rows(2),
                Textarea::make('full_description')
                    ->columnSpanFull()
                    ->rows(4),
                TagsInput::make('included_items')
                    ->placeholder('Ketik item lalu tekan Enter')
                    ->columnSpanFull(),
                Toggle::make('is_featured')
                    ->label('Featured Product (Hero/Highlights)'),
                Toggle::make('is_active')
                    ->default(true),
                Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image_path')
                            ->image()
                            ->directory('products')
                            ->saveUploadedFileUsing(function ($file) {
                                $path = $file->store('products', 'public');
                                return ImageOptimizerService::optimizeAndConvertToWebp($path, 'products');
                            })
                            ->required(),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_primary')
                            ->label('Gambar Utama'),
                    ])
                    ->columns(3)
                    ->columnSpanFull()
                    ->defaultItems(1),
            ]);
    }
}
