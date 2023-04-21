<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use App\Mail\SendWizard;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Mail;

class ListStaff extends ListRecords
{
    protected static string $resource = StaffResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function SendToUser($data): void
    {
        Mail::to($data['email'])->send(new SendWizard($data));
    
        //dd($data['email']);
    }


}
