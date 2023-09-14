<?php

namespace App\Filament\Resources\NewsPostResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Livewire\Component;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NewsPostResource;

class EditNewsPost extends EditRecord
{
    protected static string $resource = NewsPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    public function toDatabase(User $notifiable): array
    {
        return Notification::make()
            ->title('Saved successfully')
            ->getDatabaseMessage();
    }
}
