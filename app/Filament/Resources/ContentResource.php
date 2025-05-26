<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use App\Models\Content;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-s-adjustments-horizontal';
    protected static ?string $navigationGroup = 'Halaman';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('page_id')
                    ->relationship('page', 'slug')
                    ->required(),
                Forms\Components\TextInput::make('sub_title')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('published_at')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Repeater::make('contents')
                    ->label('Blok Konten')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->label('Tipe Blok')
                            ->options([
                                'text' => 'Teks',
                                'card' => 'Card',
                                'image' => 'Gambar',
                                'carousel' => 'Carousel',
                                'columns' => 'Kolom Dinamis',
                                'table' => 'Table'
                            ])
                            ->reactive(),

                        Forms\Components\Group::make()
                            ->schema(function (callable $get) {
                                return match ($get('type')) {
                                    'text' => [
                                        Forms\Components\RichEditor::make('data.text')->label('Isi Teks'),
                                    ],
                                    'card' => [
                                        Forms\Components\TextInput::make('data.title')->label('Judul'),
                                        Forms\Components\Textarea::make('data.desc')->label('Deskripsi'),
                                        Forms\Components\FileUpload::make('data.image')->label('Gambar')->image(),
                                    ],
                                    'image' => [
                                        Forms\Components\FileUpload::make('data.src')->label('Gambar')->image(),
                                    ],
                                    'carousel' => [
                                        Forms\Components\FileUpload::make('data.images')
                                            ->label('Gambar Carousel')
                                            ->multiple()
                                            ->image(),
                                    ],
                                    'table' => [
                                        Forms\Components\Repeater::make('data.headers')
                                            ->label('Table Headers')
                                            ->schema([
                                                Forms\Components\TextInput::make('header') // ✅ pakai nama field
                                                    ->label('Header'),
                                            ])
                                            ->columnSpanFull(),

                                        Forms\Components\Repeater::make('data.rows')
                                            ->label('Table Rows')
                                            ->schema([
                                                Forms\Components\Repeater::make('cells') // ✅ pakai nama field 'cells' di repeater baris
                                                    ->label('Row Data')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('cell')
                                                            ->label('Cell Data'),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),
                                    ],

                                    'columns' => [
                                        Forms\Components\Select::make('data.column_count')
                                            ->label('Jumlah Kolom')
                                            ->options([
                                                2 => '2 Kolom',
                                                3 => '3 Kolom',
                                                4 => '4 Kolom',
                                            ])
                                            ->default(3)
                                            ->reactive(),

                                        Forms\Components\Repeater::make('data.columns')
                                            ->label('Isi Per Kolom')
                                            ->schema([
                                                Forms\Components\Repeater::make('blocks')
                                                    ->label('Blok Dalam Kolom')
                                                    ->schema([
                                                        Forms\Components\Select::make('type')
                                                            ->label('Tipe')
                                                            ->options([
                                                                'text' => 'Teks',
                                                                'card' => 'Card',
                                                                'image' => 'Gambar',
                                                            ])
                                                            ->reactive(),

                                                        Forms\Components\Group::make()
                                                            ->schema(function (callable $get) {
                                                                return match ($get('type')) {
                                                                    'text' => [
                                                                        Forms\Components\Textarea::make('data.text')->label('Teks'),
                                                                    ],
                                                                    'card' => [
                                                                        Forms\Components\TextInput::make('data.title')->label('Judul'),
                                                                        Forms\Components\Textarea::make('data.desc')->label('Deskripsi'),
                                                                        Forms\Components\FileUpload::make('data.image')->label('Gambar')->image(),
                                                                    ],
                                                                    'image' => [
                                                                        Forms\Components\FileUpload::make('data.src')->label('Gambar')->image(),
                                                                    ],
                                                                    default => [],
                                                                };
                                                            }),
                                                    ])
                                            ])
                                    ],
                                    default => [],
                                };
                            }),
                    ])
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sub_title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListContents::route('/'),
            'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'),
            'pages' => Pages\Content::route('home')
        ];
    }
}
