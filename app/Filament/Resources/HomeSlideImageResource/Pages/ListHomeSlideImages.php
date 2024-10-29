<?php

namespace App\Filament\Resources\HomeSlideImageResource\Pages;

use App\Filament\Resources\HomeSlideImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeSlideImages extends ListRecords
{
    protected static string $resource = HomeSlideImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
