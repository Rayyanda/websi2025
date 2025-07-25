<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Filament\Resources\DosenResource\RelationManagers;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Tabel';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nip')
                    ->label('NIP')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('sertifikasi_dosen')
                    ->label('Sertifikasi Dosen')
                    ->options([
                        "Memiliki" => 'Memiliki',
                        "Belum Memiliki" => 'Belum Memiliki',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->image()
                    ->directory('images/contents')
                    ->visibility('public'),
                Forms\Components\Textarea::make('bidang_pengajaran')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sertifikasi_dosen'),
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
            ]);
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
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return Auth::user()?->can('create Dosen');
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->can('view-any Dosen'); // null-safe
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::user()?->can('delete Dosen');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()?->can('delete-any Dosen');
    }

    public static function canForceDelete(Model $record): bool
    {
        return Auth::user()?->can('force-delete Dosen');
    }

    public static function canForceDeleteAny(): bool
    {
        return Auth::user()?->can('force-delete-any Dosen');
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::user()?->can('update Dosen');
    }

    public static function canEditAny(): bool
    {
        return Auth::user()?->can('update-any Dosen');
    }

    public static function canRestore(Model $record): bool
    {
        return Auth::user()?->can('restore Dosen');
    }

    public static function canRestoreAny(): bool
    {
        return Auth::user()?->can('restore-any Dosen');
    }

    public static function canForceRestore(Model $record): bool
    {
        return Auth::user()?->can('force-restore Dosen');
    }

    public static function canForceRestoreAny(): bool
    {
        return Auth::user()?->can('force-restore-any Dosen');
    }
}
