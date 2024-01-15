<?php

namespace App\Filament\Resources\StatutResource\Pages;

use App\Filament\Resources\StatutResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatut extends ViewRecord
{
    protected static string $resource = StatutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
