<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use App\Models\Content;
use App\Models\Page;
use App\Models\KalenderAkademik;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Dosen;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Schema;

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
                    ->createOptionForm([
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\DateTimePicker::make('published_at'),
                    ])
                    ->required(),
                Forms\Components\TextInput::make('sub_title')
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_active')
                    ->onIcon('heroicon-m-bolt')
                    ->offIcon('heroicon-m-user'),
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
                                'table' => 'Table',
                                'posts' => 'Posts',
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
                                        Forms\Components\FileUpload::make('data.image')->label('Gambar')
                                            ->image()
                                            ->disk('public')
                                            ->directory('images/contents')
                                            ->visibility('public'),
                                    ],
                                    'image' => [
                                        Forms\Components\FileUpload::make('data.src')->label('Gambar')
                                            ->image()
                                            ->disk('public')
                                            ->directory('images/contents')
                                            ->visibility('public')
                                            ->multiple(),
                                    ],
                                    'carousel' => [
                                        Forms\Components\FileUpload::make('data.images')
                                            ->label('Gambar Carousel')
                                            ->image()
                                            ->disk('public')
                                            ->directory('images/contents')
                                            ->visibility('public')
                                            ->multiple()
                                    ],
                                    'table' => [
                                        Forms\Components\Select::make('data.model')
                                            ->label('Pilih Model')
                                            ->options([
                                                KalenderAkademik::class => 'Kalender Akademik',
                                                Dosen::class => 'Dosen',
                                                // Model lain?
                                            ])
                                            ->required()
                                            ->reactive(),

                                        Forms\Components\CheckboxList::make('data.columns')
                                            ->label('Kolom yang Ditampilkan')
                                            ->options(function (callable $get) {
                                                $modelClass = $get('data.model');
                                                if (! $modelClass) return [];
                                                try {
                                                    $table = (new $modelClass)->getTable();
                                                    $columns = Schema::getColumnListing($table);
                                                    return array_combine($columns, $columns);
                                                } catch (\Exception $e) {
                                                    return [];
                                                }
                                            })
                                            ->required()
                                            ->columns(2),

                                        Forms\Components\Repeater::make('data.filters')
                                            ->label('Filter Data')
                                            ->schema([
                                                Forms\Components\TextInput::make('column')->label('Kolom Filter'),
                                                Forms\Components\Select::make('operator')
                                                    ->label('Operator')
                                                    ->options([
                                                        '=' => '=',
                                                        'like' => 'LIKE',
                                                        '>' => '>',
                                                        '<' => '<',
                                                        '>=' => '>=',
                                                        '<=' => '<=',
                                                    ])
                                                    ->default('=')
                                                    ->required(),
                                                Forms\Components\TextInput::make('value')->label('Nilai'),
                                            ])
                                            ->defaultItems(0)
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
                                                                        Forms\Components\FileUpload::make('data.image')->label('Gambar')->image()
                                                                            ->disk('public')
                                                                            ->directory('images/contents')
                                                                            ->visibility('public'),
                                                                    ],
                                                                    'image' => [
                                                                        Forms\Components\FileUpload::make('data.src')->label('Gambar')
                                                                            ->image()
                                                                            ->disk('public')
                                                                            ->directory('images/contents')
                                                                            ->visibility('public'),
                                                                    ],
                                                                    default => [],
                                                                };
                                                            }),
                                                    ])
                                            ])
                                    ],

                                    'posts' => [
                                        Forms\Components\Select::make('data.category_id')
                                            ->label('Kategori Post')
                                            ->options(PostCategory::all()->pluck('title', 'id'))
                                            ->reactive(),

                                        Forms\Components\Select::make('data.posts')
                                            ->label('Pilih Post')
                                            ->options(
                                                fn(callable $get) =>
                                                $get('data.category_id')
                                                    ? Post::where('category_id', $get('data.category_id'))->pluck('title', 'id')
                                                    : []
                                            )
                                            ->multiple()
                                            ->searchable(),
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
                Tables\Columns\TextColumn::make('page.title')
                    ->label('Judul Page')
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultGroup('page.title')
        ;
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
