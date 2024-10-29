<?php

namespace App\Filament\Resources\TestmonialResource\Pages;

use App\Filament\Resources\TestmonialResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditTestmonial extends EditRecord
{
    protected static string $resource = TestmonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
        ->success()
        ->title('Testimonial Updated')
        ->body('Testimonial Updated successfully.');

    }
}
