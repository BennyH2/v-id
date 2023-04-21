<?php

namespace App\Filament\Pages;

use App\Settings\FrontEnd;
use AskerAkbar\GptTrixEditor\Components\GptTrixEditor;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Pages\SettingsPage;

class ManageFrontEnd extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = FrontEnd::class;

    protected static ?string $navigationLabel = 'Front End Settings';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Front End';


    protected function getFormSchema(): array
    {
        return [
            Section::make('Brochure & Favicon')
                        ->schema([
            FileUpload::make('brochure')->required()->label('Brochure')->directory('brodchure')->acceptedFileTypes(['application/pdf'])->columnSpanFull(),
            FileUpload::make('favicon')->required()->label('Favicon')->directory('favicon')->image()->columnSpanFull(),
        ])->collapsible(),
            Section::make('Terms & Conditions')->schema([
                GptTrixEditor::make('terms_conditions')->columnSpan('full'),
            ])->collapsible(),
            Section::make('Privacy Policy')->schema([
                GptTrixEditor::make('privacy_policy')->columnSpan('full'),
            ])->collapsible(),
        ];
    }
}
