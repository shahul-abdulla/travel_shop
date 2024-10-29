<?php

namespace App\Filament\Resources\HomeSlideImageResource\Pages;

use App\Filament\Resources\HomeSlideImageResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeSlideImage extends CreateRecord
{
    protected static string $resource = HomeSlideImageResource::class; protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Image Uploaded')
        ->body('Image Uploaded successfully.');
}
}
