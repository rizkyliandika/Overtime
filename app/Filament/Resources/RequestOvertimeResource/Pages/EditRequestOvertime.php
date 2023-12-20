<?php

namespace App\Filament\Resources\RequestOvertimeResource\Pages;

use App\Filament\Resources\RequestOvertimeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestOvertime extends EditRecord
{
    protected static string $resource = RequestOvertimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
