<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Content;
use App\Models\Page;


class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalContents = Content::count();
        $pagesWithContent = Page::has('contents')->count();
        $averagePerPage = $totalContents > 0 ? $totalContents / Page::count() : 0;

        return [
            Stat::make('Total Content', $totalContents),
            Stat::make('Pages with Content', $pagesWithContent),
            Stat::make('Avg Content per Page', number_format($averagePerPage, 2)),
        ];
    }
}
