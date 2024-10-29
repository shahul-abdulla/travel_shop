<?php

namespace App\Filament\Resources\TestmonialResource\Pages;

use App\Filament\Resources\TestmonialResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateTestmonial extends CreateRecord
{
    protected static string $resource = TestmonialResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Testimonial Created')
        ->body('Testimonial created successfully.');
}
}
