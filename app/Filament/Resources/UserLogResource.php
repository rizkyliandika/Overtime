<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserLogResource\Pages;
use App\Filament\Resources\UserLogResource\RelationManagers;
use App\Models\UserLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class UserLogResource extends Resource
{
    protected static ?string $model = UserLog::class;

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
                TextColumn::make('id'),
                TextColumn::make('username'),
                TextColumn::make('page_title'),
                TextColumn::make('group_name'),
                TextColumn::make('action'),
                TextColumn::make('description'),
                
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
            'index' => Pages\ListUserLogs::route('/'),
            'create' => Pages\CreateUserLog::route('/create'),
            'edit' => Pages\EditUserLog::route('/{record}/edit'),
        ];
    }
}
