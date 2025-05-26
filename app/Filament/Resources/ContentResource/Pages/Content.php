<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Resources\Pages\Page;

class Content extends Page
{

    protected static string $resource = ContentResource::class;

    protected static string $view = 'filament.resources.content-resource.pages.content';
}
