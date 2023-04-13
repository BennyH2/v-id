<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactFormResource\Pages;
use App\Filament\Resources\ContactFormResource\RelationManagers;
use App\Models\ContactForm;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\ValidationException;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

class ContactFormResource extends Resource
{
    protected static ?string $model = ContactForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationLabel = 'Contact Form';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Front End';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                //This will be the title, Venue Location, Drop off
                                TextInput::make('name')
                                    ->label('Name')
                                    ->hint('Customer Name')
                                    ->required()
                                    ->alpha()
                                    ->columnSpanFull(),
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->hint('Customer Email')
                                    ->required(),
                                TextInput::make('phone')
                                    ->label('Phone Number')
                                    ->tel()
                                    ->alphaNum()
                                    ->hint('Customer Phone')
                                    ->required(),
                            ])
                            ->columns(2),
                            Section::make('Message')
                            ->schema([
                                RichEditor::make('message')
                                ->disableAllToolbarButtons()
                                ->required()
                                ->toolbarButtons([
                                    'blockquote',
                                    'bold',
                                    'bulletList',
                                    'italic',
                                    'orderedList',
                                    'redo',
                                    'strike',
                                    'undo',
                                ])
                            ])->collapsible(),
                    ])->columnSpan(['sm' => 1, 'lg' => 2]),
                //split away
                Group::make()->schema([
                        Section::make('Details')
                            ->schema([
                                DatePicker::make('date')->default(today())->minDate(today()),
                                Grid::make(2)->schema([
                                TextInput::make('city')
                                        ->label("City")
                                        ->reactive()
                                        ->extraAttributes([
                                            'class' => '-ml-2'
                                        ]),
                                TextInput::make('state')
                                        ->label("State")
                                        ->reactive()
                                        ->extraAttributes([
                                            'class' => '-ml-2'
                                        ]),
                                    ])->columnSpanFull(),
                                Select::make('fol_status')
                                    ->label("Followed Up")
                                    ->default("pending")
                                    ->options([
                                        'pending' => 'Pending',
                                        'reviewing' => 'Reviewing',
                                        'finished' => 'Finished',
                                    ]),
                                Select::make('eml_status')
                                    ->label("Email Status")
                                    ->hint('This is automated')
                                    ->default("pending")
                                    ->disabled()
                                    ->options([
                                        'pending' => 'Pending',
                                        'sent' => 'Sent',
                                        'error' => 'Error',
                                    ]),
                            ]),
                    ])->columnSpan(['sm' => 'full', 'lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label("Name")->description(fn (ContactForm $record): string => $record->phone),
                TextColumn::make('email')->label("Email")->copyable()->copyMessage('Email address copied')->copyMessageDuration(1500),
                TextColumn::make('created_at')->since()->label("Since")->description(fn (ContactForm $record): string => $record->created_at),
                SelectColumn::make('fol_status')
                ->options([
                    'pending' => 'Pending',
                    'reviewing' => 'Reviewing',
                    'finished' => 'Finished',
                ]),
            ])
            ->filters([
                Filter::make('fol_status')->query(fn (Builder $query): Builder => $query->where('fol_status', 'pending'))->toggle()->label('Pending'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AuditsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactForms::route('/'),
            'create' => Pages\CreateContactForm::route('/create'),
            'edit' => Pages\EditContactForm::route('/{record}/edit'),
        ];
    }
}
