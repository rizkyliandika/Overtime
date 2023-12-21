<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestOvertimeResource\Pages;
use App\Filament\Resources\RequestOvertimeResource\RelationManagers;
use App\Models\RequestOvertime;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestOvertimeResource extends Resource
{
    protected static ?string $model = RequestOvertime::class;

    protected static ?string $navigationLabel = 'Request Overtime';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TimePicker::make('start_time')
                    ->required()
                    ->dataList([
                        '09:00',
                        '09:15',
                        '10:30',
                        '10:45',
                        '11:00',
                        '11:15',
                        '11:30',
                    ])
                    ->default('09:00'),
                Forms\Components\TimePicker::make('end_time')
                    ->required()
                    ->dataList([
                        '09:00',
                        '09:15',
                        '10:30',
                        '10:45',
                        '11:00',
                        '11:15',
                        '11:30',
                    ])
                    ->default('09:00'),
                Forms\Components\Select::make('type_id')
                    ->required()
                    ->preload()
                    ->searchable()
                    ->relationship('type', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListRequestOvertimes::route('/'),
            'create' => Pages\CreateRequestOvertime::route('/create'),
            'edit' => Pages\EditRequestOvertime::route('/{record}/edit'),
        ];
    }
}
