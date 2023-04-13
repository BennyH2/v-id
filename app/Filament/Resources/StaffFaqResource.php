<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffFaqResource\Pages;
use App\Filament\Resources\StaffFaqResource\RelationManagers;
use App\Models\StaffFaq;
use App\Models\User;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PharIo\Manifest\Author;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

class StaffFaqResource extends Resource
{
    protected static ?string $model = StaffFaq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationLabel = 'Staff FAQ';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Front End';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Group::make()->schema([
                    Forms\Components\Card::make()
                        ->schema([
                            TextInput::make('question')->columnSpanFull()->required(),
                        ])
                        ->columns(2),
                        Section::make('Answer')
                        ->schema([
                            RichEditor::make('answer')
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
                Select::make('author')
                    ->label('Author')
                    ->preload()
                    ->options(user::pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->reactive()
                    ->default(auth()->id())                    
                    ->columnSpanFull()
                    ->afterStateUpdated(function ($state, Closure $set) {
                        if(blank($state)) return;
                        
                        $author = user::find($state);
                        
                        // $set('author_number', $author->number);
                    }),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->preload()
                    ->searchable()
                    ->required()
                    ->createOptionForm([
                        Grid::make()
                            ->schema([
                                TextInput::make('name')->label("Category Name")->minLength(2)->maxLength(255)->required(),
                            ])
                    ])
                    ->reactive()
                    ->columnSpanFull(),
                        ]),
                ])->columnSpan(['sm' => 'full', 'lg' => 1]),
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question'),

                TextColumn::make('answer')
                    ->words(10)
                    
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column contents exceeds the length limit.
                        return $state;
                    })
                    ->html(),

                TextColumn::make('category.name'),
                TextColumn::make('created_at')->since()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListStaffFaqs::route('/'),
            'create' => Pages\CreateStaffFaq::route('/create'),
            'edit' => Pages\EditStaffFaq::route('/{record}/edit'),
        ];
    }
}
