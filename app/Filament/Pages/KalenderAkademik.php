<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class KalenderAkademik extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.kalender-akademik';

    public function getCalendar()
    {
        return KalenderAkademik::all();
    }
}
