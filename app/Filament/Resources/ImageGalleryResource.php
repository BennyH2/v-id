<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageGalleryResource\Pages;
use App\Filament\Resources\ImageGalleryResource\RelationManagers;
use App\Models\ImageGallery;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageGalleryResource extends Resource
{
    protected static ?string $model = ImageGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static ?string $navigationLabel = 'Image Gallery';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Front End';

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
                                ->hint('Image Name')
                                ->required()
                                ->columnSpanFull(),
                            TextInput::make('description')
                                ->label('Description')
                                ->hint('Small descriotion of the image')
                                ->columnSpanFull()
                                ->required(),
                        ])
                        ->columns(2),
                        Section::make('Image')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('galleryimage')->conversion('preview')->collection('gallery')->required()->label('Gallery Image'),
                        ])->collapsible(),
                ])->columnSpan(['sm' => 1, 'lg' => 2]),
            //split away
            Group::make()->schema([
                    Section::make('Details')
                        ->schema([
                            Select::make('category_id')
                            ->label('Category')
                            ->relationship('categories', 'name')
                            ->preload()
                            ->placeholder('Select a category')
                            ->multiple()
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
                            TextInput::make('project')
                                ->label('Project')
                                ->hint('Project Name')
                                ->required(),
                            TextInput::make("credit_to")
                                ->label("Credit To")
                                ->hint("Who took the image?"),
                            TextInput::make("client")
                                ->label("Client")
                                ->hint("Client Name"),
                        ]),
                ])->columnSpan(['sm' => 'full', 'lg' => 1]),
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                SpatieMediaLibraryImageColumn::make('galleryimage')->conversion('preview')->collection('gallery')->sortable()->searchable(),
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImageGalleries::route('/'),
            'create' => Pages\CreateImageGallery::route('/create'),
            'edit' => Pages\EditImageGallery::route('/{record}/edit'),
        ];
    }
}
