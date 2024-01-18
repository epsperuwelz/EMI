<?php

namespace App\Filament\Resources\OperatingsystemResource\Pages;

use App\Filament\Resources\OperatingsystemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOperatingsystems extends ListRecords
{
    protected static string $resource = OperatingsystemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
