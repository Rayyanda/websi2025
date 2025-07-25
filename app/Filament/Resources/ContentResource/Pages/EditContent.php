<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use App\Mail\NewContentInformation;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EditContent extends EditRecord
{
    protected static string $resource = ContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('New Contents')
                ->url('/admin/contents/create'),
        ];
    }

    protected function afterSave()
    {
        $editor = Auth::user();
        $admins = User::role(['admin','dosen'])->get();
        foreach ($admins as $admin) {
            Mail::to($admin)->send(new NewContentInformation($editor,$this->record));
        }
    }
}
