<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use App\Filament\Resources\ContentResource\Pages as ContentResou;
use App\Filament\Widgets\StatsOverview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-s-link';
    protected static ?string $navigationGroup = 'Halaman';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('contents')
                    ->label('Konten')
                    ->icon(fn($record) => $record->contents->isNotEmpty() ? 'heroicon-o-check' : 'heroicon-o-minus')
                    ->color(fn($record) => $record->contents->isNotEmpty() ? 'success' : 'danger'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->query(static::getEloquentQuery()->with('contents'))
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with('contents');
    }


    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getWidgets(): array
{
    return [
        StatsOverview::class
    ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return auth()->user()->can('create Page');
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->can('view-any Page'); // null-safe
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::user()?->can('delete Page');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()?->can('delete-any Page');
    }

    public static function canForceDelete(Model $record): bool
    {
        return Auth::user()?->can('force-delete Page');
    }

    public static function canForceDeleteAny(): bool
    {
        return Auth::user()?->can('force-delete-any Page');
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::user()?->can('update Page');
    }

    public static function canEditAny(): bool
    {
        return Auth::user()?->can('update-any Page');
    }

    public static function canRestore(Model $record): bool
    {
        return Auth::user()?->can('restore Page');
    }

    public static function canRestoreAny(): bool
    {
        return Auth::user()?->can('restore-any Page');
    }

    public static function canForceRestore(Model $record): bool
    {
        return Auth::user()?->can('force-restore Page');
    }

    public static function canForceRestoreAny(): bool
    {
        return Auth::user()?->can('force-restore-any Page');
    }
}
