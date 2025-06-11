<?php

namespace App\Filament\Resources\KalenderAkademikResource\Pages;

use App\Filament\Resources\KalenderAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Livewire\WithFileUploads;
use Filament\Forms;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KalenderAkademikImport;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\ComponentContainer;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

class ImportKalender extends CreateRecord
{
    use WithFileUploads;

    //public ?\Livewire\TemporaryUploadedFile $file = null;
    protected static string $view = 'filament.pages.import-kalender';
    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-upload';
    protected static ?string $slug = 'import-kalender'; // inilah yang jadi URL-nya
    protected static string $resource = KalenderAkademikResource::class;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('file')
                ->required()
                ->label('Upload File Excel')
                ->acceptedFileTypes(['.xlsx', '.xls', '.csv']),
        ];
    }

    public function submit()
    {
        $this->validate();

        $filePath = $this->form->getState()['file'];

        if ($filePath) {
            $path = Storage::disk('public')->path($filePath);
            Excel::import(new KalenderAkademikImport, $path);

            Notification::make()
                ->title('Berhasil')
                ->body('Data berhasil diimpor dari Excel.')
                ->success()
                ->send();
        }

        $this->form->fill(); // Reset form
    }

}
