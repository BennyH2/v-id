<?php

namespace App\Filament\Resources\ImageGalleryResource\Pages;

use App\Filament\Resources\ImageGalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImageGalleries extends ListRecords
{
    protected static string $resource = ImageGalleryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
