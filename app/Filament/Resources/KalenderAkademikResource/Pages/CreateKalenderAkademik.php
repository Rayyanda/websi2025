<?php

namespace App\Filament\Resources\KalenderAkademikResource\Pages;

use App\Filament\Resources\KalenderAkademikResource;
use Filament\Actions;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;

class CreateKalenderAkademik extends CreateRecord
{
    protected static string $resource = KalenderAkademikResource::class;

    public function table(Table $table):Table
    {
        return $table
            ->query(static::getResource()::getModel()::query())
            ->columns(static::getResource()::getTableColumns())
            ->filters(static::getResource()::getTableFilters())
            ->actions(static::getResource()::getTableActions());

    }

    protected function getHeaderActions(): array
    {
        return [
            // Tambahkan actions jika diperlukan

        ];
    }

    public function getHeaderWidgets(): array
    {
        return [

        ];
    }
}
