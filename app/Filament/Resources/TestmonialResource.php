<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestmonialResource\Pages;
use App\Filament\Resources\TestmonialResource\RelationManagers;
use App\Models\Testmonial;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestmonialResource extends Resource
{
    protected static ?string $model = Testmonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->placeholder('Enter Namme'),
                TextInput::make('designation')->required()->placeholder('Enter Designation'),
                TextInput::make('description'),
                Select::make('status')->options([
                    1 => 'Active',
                    0 => 'Block'
                ]),
                FileUpload::make('image')->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->width(100),
                TextColumn::make('name'),
                TextColumn::make('designation')
                        ])
            ->filters([
                //
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
            'index' => Pages\ListTestmonials::route('/'),
            'create' => Pages\CreateTestmonial::route('/create'),
            'edit' => Pages\EditTestmonial::route('/{record}/edit'),
        ];
    }
}
