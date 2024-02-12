<?php

namespace App\Filament\Resources\WhoWeAreResource\Pages;

use App\Filament\Resources\WhoWeAreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhoWeAres extends ListRecords
{
    protected static string $resource = WhoWeAreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
