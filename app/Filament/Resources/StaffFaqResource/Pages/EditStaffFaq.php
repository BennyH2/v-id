<?php

namespace App\Filament\Resources\StaffFaqResource\Pages;

use App\Filament\Resources\StaffFaqResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStaffFaq extends EditRecord
{
    protected static string $resource = StaffFaqResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
