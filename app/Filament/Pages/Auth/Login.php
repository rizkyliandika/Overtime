<?php

namespace App\Filament\Pages\Auth;

use App\Models\UserLog;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseLogin;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Models\Contracts\FilamentUser;
use Filament\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("username")
                    ->required()
                    ->maxLength(255),
                TextInput::make("password")
                    ->required()
                    ->maxLength(255)
                    ->label(__('filament-panels::pages/auth/login.form.password.label'))
                    ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()"> {{ __(\'filament-panels::pages/auth/login.actions.request_password_reset.label\') }}</x-filament::link>')) : null)
                    ->password()
                    ->autocomplete('current-password'),
                $this->getRememberFormComponent()
            ])
            ->statePath('data')
        ;
    }

    public function getCredentialsFromFormData(array $data): array
    {
        return [
            "username" => $data["username"],
            "password" => $data["password"],
        ];
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            Notification::make()
                ->title(__('filament-panels::pages/auth/login.notifications.throttled.title', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]))
                ->body(array_key_exists('body', __('filament-panels::pages/auth/login.notifications.throttled') ?: []) ? __('filament-panels::pages/auth/login.notifications.throttled.body', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]) : null)
                ->danger()
                ->send();

            return null;
        }

        $data = $this->form->getState();

        if (!Filament::auth()->attempt($this->getCredentialsFromFormData($data), $data['remember'] ?? false)) {
            $currentDate = Carbon::now();
            $ip = request()->ip();
            $hostName = request()->host();
            UserLog::query()->create([
                "action" => "LOGIN",
                "description" => new HtmlString("
            <div>
                <div>
                    <p>Login: <span>Failed</span></p>
                </div>
                <div>
                    <p>Username: <span>{$data['username']}</span></p>
                </div>
                <div>
                    <p>Date: <span>$currentDate</span></p>
                </div>
                <div>
                    <p>IP: <span>$ip</span></p>
                </div>
                <div>
                    <p>Hostname: <span>$hostName</span></p>
                </div>
            </div>
            ")
            ]);
            $this->throwFailureValidationException();
        }

        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (!$user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();

            $this->throwFailureValidationException();
        }
        $currentDate = Carbon::now();
        $ip = request()->ip();
        $hostName = request()->host();
        UserLog::query()->create([
            "user_id" => auth()->id(),
            "action" => "LOGIN",
            "description" => new HtmlString("
            <div>
                <div>
                    <p>Login: <span>Success</span></p>
                </div>
                <div>
                    <p>Username: <span>$user->username</span></p>
                </div>
                <div>
                    <p>Date: <span>$currentDate</span></p>
                </div>
                <div>
                    <p>IP: <span>$ip</span></p>
                </div>
                <div>
                    <p>Hostname: <span>$hostName</span></p>
                </div>
            </div>
            ")
        ]);

        session()->regenerate();

        return app(LoginResponse::class);
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.username' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }

}
