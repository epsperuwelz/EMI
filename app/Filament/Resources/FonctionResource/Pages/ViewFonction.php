<?php

namespace App\Filament\Resources\FonctionResource\Pages;

use App\Filament\Resources\FonctionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFonction extends ViewRecord
{
    protected static string $resource = FonctionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
