<?php

namespace App\Filament\Resources\InquiryLogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class InquiryLogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Waktu Inkuiri')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                TextColumn::make('inquiry_type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'calculator_quote' => 'info',
                        'whatsapp_direct' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'calculator_quote' => 'Calculator Estimasi',
                        'whatsapp_direct' => 'WA Direct',
                        default => $state,
                    }),
                TextColumn::make('product.name')
                    ->label('Produk/Paket')
                    ->placeholder('Estimasi Mandiri')
                    ->searchable(),
                TextColumn::make('client_name')
                    ->label('Nama Klien')
                    ->searchable()
                    ->placeholder('-'),
                TextColumn::make('event_date')
                    ->label('Tanggal Acara')
                    ->date('d M Y')
                    ->sortable()
                    ->placeholder('-'),
                TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable()
                    ->placeholder('-'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('inquiry_type')
                    ->options([
                        'whatsapp_direct' => 'WhatsApp Direct',
                        'calculator_quote' => 'Calculator Quote',
                    ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
