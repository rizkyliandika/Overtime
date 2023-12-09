<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseLogin;

class Login extends BaseLogin
{

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("username")
                    ->required()
                    ->maxLength(255),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent()
            ]);
    }

    public function getCredentialsFromFormData(array $data): array
    {
        return [
            "username"=> $data["username"],
            "password"=> $data["password"],
        ];
    }

}
