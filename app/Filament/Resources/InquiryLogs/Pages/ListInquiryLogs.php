<?php

namespace App\Filament\Resources\InquiryLogs\Pages;

use App\Filament\Resources\InquiryLogs\InquiryLogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInquiryLogs extends ListRecords
{
    protected static string $resource = InquiryLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
