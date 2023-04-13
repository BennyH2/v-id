<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Models\staff;
use Filament\Forms;
use Filament\Tables\Actions\Action;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Navigation\NavigationItem;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Actions\EditAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Validation\Rules\Unique;

class StaffResource extends Resource
{
    protected static ?string $model = staff::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Card-Maker';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Group::make()->schema([
                    Card::make()->schema([
                        TextInput::make('name')->columnSpanFull(),
                        TextInput::make('email')->email()->unique(),
                        TextInput::make('phone')->tel(),
                    ])->columns(2),
                ])->columnSpan(['sm' => 1, 'lg' => 2]),

                Group::make()->schema([
                    Section::make('Details')
                        ->schema([
                            Toggle::make('is_active')
                                ->label('Activate')
                                ->inlineLabel()
                                ->default(true)
                                ->onColor('success')
                                ->offColor('danger'),
                            Select::make('position')
                                ->options([
                                    '1' => 'Staff',
                                    '2' => 'Admin',
                                    '3' => 'Owner',
                                ])->default('1'),
                        ]),
                    
                ])->columnSpan(['sm' => 'full', 'lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                SelectColumn::make('position')
                    ->options([
                        '1' => 'Staff',
                        '2' => 'Admin',
                        '3' => 'Owner',
                    ])->default('1')->rules(['required']),
                ToggleColumn::make('is_active'),
                TextColumn::make('id_count')
            ])
            ->filters([
                Filter::make('is_active')->label('Active')->toggle()
            ])
            ->actions([
                Action::make('Visit')->label('Visit')->url(fn (staff $record): string => route('staff', $record->id))->openUrlInNewTab()->icon('heroicon-o-link')->color('warning'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make('export')->exports([
                    ExcelExport::make()->fromModel()->except([
                        'created_at', 'updated_at', 'deleted_at',
                    ]),
                ])
            ])

            ->headerActions([
                ExportAction::make('export')->exports([
                    ExcelExport::make()->fromModel()->except([
                        'created_at', 'updated_at', 'deleted_at',
                    ]),
                ]),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\StaffPrintsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
