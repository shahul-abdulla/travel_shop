<?php

namespace App\Filament\Resources\HomeSlideImageResource\Pages;

use App\Filament\Resources\HomeSlideImageResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditHomeSlideImage extends EditRecord
{
    protected static string $resource = HomeSlideImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Image Updated')
            ->body('Image Updated successfully.');
    }
}

