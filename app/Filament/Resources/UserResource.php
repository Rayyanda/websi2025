<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationGroup = 'User';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')
                    ->required()
                    ->maxLength(255)
                    ->default('admin'),
                Forms\Components\Select::make('roles')->multiple()->relationship('roles', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return auth()->user()->can('create User');
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->can('view-any User'); // null-safe
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::user()?->can('delete User');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()?->can('delete-any User');
    }

    public static function canForceDelete(Model $record): bool
    {
        return Auth::user()?->can('force-delete User');
    }

    public static function canForceDeleteAny(): bool
    {
        return Auth::user()?->can('force-delete-any User');
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::user()?->can('update User');
    }

    public static function canEditAny(): bool
    {
        return Auth::user()?->can('update-any User');
    }

    public static function canRestore(Model $record): bool
    {
        return Auth::user()?->can('restore User');
    }

    public static function canRestoreAny(): bool
    {
        return Auth::user()?->can('restore-any User');
    }

    public static function canForceRestore(Model $record): bool
    {
        return Auth::user()?->can('force-restore User');
    }

    public static function canForceRestoreAny(): bool
    {
        return Auth::user()?->can('force-restore-any User');
    }


}
