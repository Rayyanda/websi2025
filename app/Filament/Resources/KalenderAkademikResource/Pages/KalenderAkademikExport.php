<?php

namespace App\Filament\Resources\KalenderAkademikResource\Pages;

use App\Filament\Resources\KalenderAkademikResource;
use Filament\Resources\Pages\Page;

class KalenderAkademikExport extends Page
{
    protected static string $resource = KalenderAkademikResource::class;
    protected static ?string $slug = 'export-kalender'; // inilah yang jadi URL-nya

    protected static string $view = 'filament.resources.kalender-akademik-resource.pages.kalender-akademik-export';
}
