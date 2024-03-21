<?php

namespace App\Filament\Tenant\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Facades\Filament;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Pages\Concerns\InteractsWithFormActions;

class LoginTenant extends BaseLogin
{
    use InteractsWithFormActions;
    use WithRateLimiting;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.tenant.pages.auth.login-tenant';
}
