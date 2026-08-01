<?php

namespace App\Filament\Resources\InquiryLogs;

use App\Filament\Resources\InquiryLogs\Pages\CreateInquiryLog;
use App\Filament\Resources\InquiryLogs\Pages\EditInquiryLog;
use App\Filament\Resources\InquiryLogs\Pages\ListInquiryLogs;
use App\Filament\Resources\InquiryLogs\Schemas\InquiryLogForm;
use App\Filament\Resources\InquiryLogs\Tables\InquiryLogsTable;
use App\Models\InquiryLog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InquiryLogResource extends Resource
{
    protected static ?string $model = InquiryLog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return InquiryLogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InquiryLogsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInquiryLogs::route('/'),
        ];
    }
}
