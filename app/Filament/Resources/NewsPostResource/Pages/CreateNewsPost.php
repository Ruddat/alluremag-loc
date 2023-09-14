<?php

namespace App\Filament\Resources\NewsPostResource\Pages;

use App\Models\User;
use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NewsPostResource;

class CreateNewsPost extends CreateRecord
{
    protected static string $resource = NewsPostResource::class;

    protected function getRedirectUrl(): string
    {
        $name = Auth::user()->name;
        Notification::make()
            ->title('News Post Created'.$name)
            ->body('News Post has Been saved')
            ->sendToDatabase(User::whereNot('id', auth()->user()->id)->get());
            //->send();
        ///return route('admin.news.all');
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
