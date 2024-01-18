<?php

namespace App\Filament\Resources\OperatingsystemResource\Pages;

use App\Filament\Resources\OperatingsystemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOperatingsystem extends EditRecord
{
    protected static string $resource = OperatingsystemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
