<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

class EditProfile extends BaseEditProfile
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("username")
                    ->required()
                    ->maxLength(255),
                TextInput::make("firstname")
                    ->required()
                    ->maxLength(255),
                TextInput::make("lastname")
                    ->required()
                    ->maxLength(255),
                TextInput::make("phone")
                    ->required()
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                    ->maxLength(13),
                FileUpload::make('avatar'),
                $this->getEmailFormComponent(),
            ]);
    }
}