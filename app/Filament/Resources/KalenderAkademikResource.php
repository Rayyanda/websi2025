<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KalenderAkademikResource\Pages;
use App\Filament\Resources\KalenderAkademikResource\RelationManagers;
use App\Models\KalenderAkademik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class KalenderAkademikResource extends Resource
{
    protected static ?string $model = KalenderAkademik::class;

    protected static ?string $navigationIcon = 'heroicon-s-calendar-days';
    protected static ?string $navigationGroup = 'Tabel';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tahun_ajaran_id')
                    ->relationship('tahunAjaran', 'tahun_ajaran')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('tahun_ajaran')
                            ->required(),
                        Forms\Components\TextInput::make('keterangan'),
                    ])
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kegiatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('semester')
                    ->options([
                        'Gasal',
                        'Genap'
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('tgl_mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tgl_selesai')
                    ->required(),
                Forms\Components\Textarea::make('keterangan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\View::make('filament.pages.kalender-akademik')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahunAjaran.tahun_ajaran')
                    ->label('Tahun Ajaran')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_mulai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tgl_selesai')
                    ->date()
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
            ])
            ->defaultGroup('tahunAjaran.tahun_ajaran');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKalenderAkademiks::route('/'),
            'create' => Pages\CreateKalenderAkademik::route('/create'),
            'edit' => Pages\EditKalenderAkademik::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return auth()->user()->can('create KalenderAkademik');
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->can('view-any KalenderAkademik'); // null-safe
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::user()?->can('delete KalenderAkademik');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()?->can('delete-any KalenderAkademik');
    }

    public static function canForceDelete(Model $record): bool
    {
        return Auth::user()?->can('force-delete KalenderAkademik');
    }

    public static function canForceDeleteAny(): bool
    {
        return Auth::user()?->can('force-delete-any KalenderAkademik');
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::user()?->can('update KalenderAkademik');
    }

    public static function canEditAny(): bool
    {
        return Auth::user()?->can('update-any KalenderAkademik');
    }

    public static function canRestore(Model $record): bool
    {
        return Auth::user()?->can('restore KalenderAkademik');
    }

    public static function canRestoreAny(): bool
    {
        return Auth::user()?->can('restore-any KalenderAkademik');
    }

    public static function canForceRestore(Model $record): bool
    {
        return Auth::user()?->can('force-restore KalenderAkademik');
    }

    public static function canForceRestoreAny(): bool
    {
        return Auth::user()?->can('force-restore-any KalenderAkademik');
    }
}
