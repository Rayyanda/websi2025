<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';
    protected static ?string $navigationGroup = 'Halaman';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'title')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\TextInput::make('url'),
                    ]),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('images')
                    ->multiple()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship(name: 'user', titleAttribute: 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return auth()->user()->can('create Post');
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->can('view-any Post'); // null-safe
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::user()?->can('delete Post');
    }

    public static function canDeleteAny(): bool
    {
        return Auth::user()?->can('delete-any Post');
    }

    public static function canForceDelete(Model $record): bool
    {
        return Auth::user()?->can('force-delete Post');
    }

    public static function canForceDeleteAny(): bool
    {
        return Auth::user()?->can('force-delete-any Post');
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::user()?->can('update Post');
    }

    public static function canEditAny(): bool
    {
        return Auth::user()?->can('update-any Post');
    }

    public static function canRestore(Model $record): bool
    {
        return Auth::user()?->can('restore Post');
    }

    public static function canRestoreAny(): bool
    {
        return Auth::user()?->can('restore-any Post');
    }

    public static function canForceRestore(Model $record): bool
    {
        return Auth::user()?->can('force-restore Post');
    }

    public static function canForceRestoreAny(): bool
    {
        return Auth::user()?->can('force-restore-any Post');
    }
}
