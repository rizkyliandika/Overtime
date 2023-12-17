<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\RelationManagers\RolesRelationManager;
use App\Models\User;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Admin Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('firstname')
                            ->required()
                            ->label('First Name')
                            ->minLength(3)
                            ->maxLength(255),
                        TextInput::make('lastname')
                            ->required()
                            ->label('Last Name')
                            ->minLength(3)
                            ->maxLength(255),
                        TextInput::make('username')
                            ->required()
                            ->label('Username')
                            ->minLength(3)
                            ->maxLength(255),
                        TextInput::make('email')
                            ->required(static fn(Page $livewire): bool =>
                                ($livewire instanceof EditUser ? false : true)
                            )
                            ->label('Email')
                            ->validationMessages([
                                'unique' => 'The :attribute has already been registered.',
                            ])
                            ->email(),
                        TextInput::make('password')
                            ->dehydrateStateUsing(static fn(null|string $state):
                                null|string =>
                                filled($state) ? Hash::make($state) : null
                            )->required(static fn(Page $livewire): string =>
                                $livewire instanceof CreateUser
                            )->dehydrated(static fn(null|string $state): bool =>
                                filled($state),
                            )
                            ->label(static fn(Page $livewire): string =>
                                ($livewire instanceof EditUser ? 'New Password' : 'Password')
                            )
                            ->minLength(3)
                            ->maxLength(255)
                            ->password(),
                        TextInput::make('phone')
                            ->required()
                            ->label('Phone')
                            ->maxLength(13)
                            ->tel(),
                        CheckboxList::make('roles')
                            ->relationship('roles', 'name')
                            ->columns(3)
                            ->helperText('Only choose one !')
                            ->required(),
                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->idleLabel(`Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`)
                            ->imagePreviewHeight('200')
                            ->imageCropAspectRatio('1:1')
                            ->columnSpan(2),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('roles.name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('firstname')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lastname')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('username')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            RolesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
