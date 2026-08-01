<?php

namespace App\Filament\Resources\InquiryLogs\Pages;

use App\Filament\Resources\InquiryLogs\InquiryLogResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInquiryLog extends EditRecord
{
    protected static string $resource = InquiryLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
