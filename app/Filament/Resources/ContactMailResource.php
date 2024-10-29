<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMailResource\Pages;
use App\Filament\Resources\ContactMailResource\RelationManagers;
use App\Models\Contact;
use App\Models\ContactMail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMailResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('comments'),
                SelectColumn::make('status')->options([
                    1 => 'Contacted',
                    0 => 'Pending'
                ]),                ])
            ->filters([
                //
            ])
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            // ])
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
            'index' => Pages\ListContactMails::route('/'),
            // 'create' => Pages\CreateContactMail::route('/create'),
            // 'edit' => Pages\EditContactMail::route('/{record}/edit'),
        ];
    }
}
