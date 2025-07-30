<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Actions;
use App\Models\Content;
use App\Models\User;
use App\Mail\InformasiKonten;
use Illuminate\Support\Facades\Mail;
use Filament\Resources\Pages\ListRecords;
use Filament\Notifications\Notification;

class ListContents extends ListRecords
{
    protected static string $resource = ContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            //action to send email to admin per row
            Actions\Action::make('sendEmail')
                ->label('Send Email to Admin')
                ->action(function () {
                    $content = Content::where('updated_at', '<', now()->subWeeks(3))->get();

                    if ($content->isEmpty()) {
                        Notification::make()
                            ->title('Tidak ada konten kadaluarsa.')
                            ->body('Semua konten masih terbaru.')
                            ->info()
                            ->send();
                        return;
                    }

                    $admins = User::role(['admin', 'dosen'])->get();

                    foreach ($admins as $admin) {
                        Mail::to($admin->email)->send(new InformasiKonten($content));
                    }

                    Notification::make()
                        ->title('Email berhasil dikirim!')
                        ->body('Pengingat telah dikirim ke semua admin dan dosen.')
                        ->success()
                        ->send();
                })
                ->icon('heroicon-c-envelope')
                ->color('primary'),
        ];
    }

    
}
