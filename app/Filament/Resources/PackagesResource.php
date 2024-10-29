<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackagesResource\Pages;
use App\Filament\Resources\PackagesResource\RelationManagers;
use App\Models\Packages;
use Filament\Forms;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackagesResource extends Resource
{
    protected static ?string $model = Packages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->columnSpan('full')
                    ->tabs([
                        Tab::make('Package')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('package_name')
                                            ->label('Package Name')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                        TextInput::make('slug')->required()->placeholder('slug'),
                                        TextInput::make('detail_heading')
                                            ->label('Detail Heading')->required(),
                                        TextInput::make('location')
                                            ->label('Location')->required(),
                                        TextInput::make('price')->required(),
                                        TextInput::make('date'),
                                        Select::make('pickup')->options([
                                            1 => 'Include',
                                            2 => 'Exclude'
                                        ])->default(1),
                                        TextInput::make('reviews'),
                                        TextInput::make('date_time')->placeholder('eg(3 day and 4 night)')->label('Day and Night')->required(),
                                        TextInput::make('offer')->placeholder('eg(20%)'),
                                        TextInput::make('location_map')->label('Location Map')->placeholder('Location Url'),
                                        Select::make('status')->options([
                                            1 => 'Active',
                                            2 => 'In Active'
                                        ])->default(1),
                                        FileUpload::make('image'),


                                    ]),
                            ]),
                        Tab::make('Package Detail')
                            ->schema([
                                TagsInput::make('tour_includes')->label('Tour Include')->placeholder('Includes'),
                                TagsInput::make('price_exclude')->label('Tour Exclude')->placeholder('Tour Exclude'),

                            ]),
                            Tab::make('Days and Activity')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Section::make('Days and Activity')
                                            ->schema([
                                                Repeater::make('days')
                                                    ->relationship('days')
                                                    ->label('Days')
                                                    ->schema([
                                                        TextInput::make('day')
                                                            ->label('Day')->placeholder('eg:(Day 1)'),
                                                        TextInput::make('title')
                                                            ->label('Title'),
                                                        TextInput::make('day_activity')
                                                            ->label('Day Activity'),
                                                    ])
                                                    ->columns(1),
                                            ]),
                                    ]),
                            ]),
                            Tab::make('Highlight Images')
                            ->schema([
                                Repeater::make('HighlightImage') 
                                    ->relationship('HighlightImage') 
                                    ->schema([
                                        FileUpload::make('image_path')
                                            ->label('Upload Highlight Image')
                                    ])
                                    ->columns(1)
                            ]),
                        
                            Tab::make('Additional Details')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Section::make('Activities')
                                            ->schema([
                                                Repeater::make('activities')
                                                    ->relationship('activities')
                                                    ->label('Activities')
                                                    ->schema([
                                                        TextInput::make('heading')
                                                            ->label('Heading'),
                                                        TextInput::make('content')
                                                            ->label('Content'),
                                                    ])
                                                    ->columns(1)
                                            ]),
                                    ]),
                            ]),

                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->width(100),
                TextColumn::Make('package_name')->searchable(),
                TextColumn::Make('location')->searchable(),
                TextColumn::Make('price')->searchable(),
                SelectColumn::make('status')->options([
                    1 => 'Active',
                    0 => 'Inactive'
                ]),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        0 => 'Inactive',
                        1 => 'Active'
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackages::route('/create'),
            'edit' => Pages\EditPackages::route('/{record}/edit'),
        ];
    }
}
