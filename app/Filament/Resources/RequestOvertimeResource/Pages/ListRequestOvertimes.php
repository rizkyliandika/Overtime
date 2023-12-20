<?php

namespace App\Filament\Resources\RequestOvertimeResource\Pages;

use App\Filament\Resources\RequestOvertimeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestOvertimes extends ListRecords
{
    protected static string $resource = RequestOvertimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
