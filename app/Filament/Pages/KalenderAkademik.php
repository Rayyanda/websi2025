<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\Page;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KalenderAkademikImport;

class KalenderAkademik extends Page
{
    use WithFileUploads;
     //public ?\Livewire\TemporaryUploadedFile $file = null;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.kalender-akademik';

    public function getCalendar()
    {
        return KalenderAkademik::all();
    }
}
