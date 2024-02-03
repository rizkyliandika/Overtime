<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestOvertimeResource\Pages;
use App\Filament\Resources\RequestOvertimeResource\RelationManagers\TypesRelationManager;
use App\Filament\Resources\RoleResource\RelationManagers\PermissionsRelationManager;
use App\Models\RequestOvertime;
use App\Models\Tenant;
use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

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
                    ->default(now())
                    ->required(),
                Forms\Components\TimePicker::make('start_time')
                    ->required()
                    ->native(false)
                    ->seconds(false)
                    ->minutesStep(15)
                    ->timezone('Asia/Jakarta')
                    ->default('17:00'),
                Forms\Components\TimePicker::make('end_time')
                    ->required()
                    ->native(false)
                    ->timezone('Asia/Jakarta')
                    ->after('start_time')
                    ->seconds(false)
                    ->minutesStep(15)
                    ->default('18:00'),
                Forms\Components\Select::make('tenant_id')
                    ->label('Tenant')
                    ->relationship(name: 'tenant', titleAttribute: 'name')
                    ->options(function () {
                        $user = Auth::user();
                        $result = [];

                        if ($user->hasAnyRole(['administrator', 'building-operator'])) {
                            $result = Tenant::all()->pluck('name', 'id')->toArray();
                        } else {
                            $result = Tenant::where('user_id', '=', Auth::user()->id)->pluck('name', 'id')->toArray();
                        }

                        return $result;
                    })
                    ->searchable()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        $user = Auth::user();
        $isAdmin = $user->hasAnyRole(['administrator', 'building-operator']);
        return $table
            ->modifyQueryUsing(function (Builder $query) use ($isAdmin) {
                $tenantIdByAuthUser = Tenant::query()->where('user_id', '=', Auth::user()->id)->value('id');

                if (!$isAdmin) {
                    $query->where('tenant_id', '=', $tenantIdByAuthUser);
                }
            })
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('types.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tenant.name')
                    ->label('Company Name')
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
            TypesRelationManager::class
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
