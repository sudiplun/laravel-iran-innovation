<?php

namespace App\Filament\Resources\CardViewResource\Pages;

use App\Filament\Resources\CardViewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCardView extends EditRecord
{
    protected static string $resource = CardViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
