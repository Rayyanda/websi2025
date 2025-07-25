<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormsResource\Pages;
use App\Filament\Resources\FormsResource\RelationManagers;
use App\Models\Forms as FormModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormsResource extends Resource
{
    protected static ?string $model = FormModel::class;

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-group';

    protected static ?string $navigationGroup = 'Forms';
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
                    ->maxLength(255),
                Forms\Components\Textarea::make('description'),
                Forms\Components\DateTimePicker::make('start_date')
                    ->required(),
                Forms\Components\DateTimePicker::make('end_date')
                    ->required(),
                Forms\Components\TextInput::make('password')
                    ->label('Kode Akses (Optional)'),
                Forms\Components\Toggle::make('is_public')->default(true),

                Forms\Components\Repeater::make('fields')
                    ->label('Field Form')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->options([
                                'text' => 'Text Input',
                                'textarea' => 'Textarea',
                                'select' => 'Select',
                                'checkbox' => 'Checkbox',
                            ])
                            ->required()
                            ->reactive(),

                        Forms\Components\TextInput::make('label')
                            ->required(),

                        Forms\Components\TextInput::make('name')
                            ->required(),

                        Forms\Components\Toggle::make('required')
                            ->label('Wajib diisi?'),

                        Forms\Components\Group::make([
                            Forms\Components\Repeater::make('options')
                                ->label('Opsi (hanya untuk Select/Checkbox)')
                                ->schema([
                                    Forms\Components\TextInput::make('value')
                                        ->label('Isi Opsi')
                                ])
                        ])->visible(fn($get) => in_array($get('type'), ['select', 'checkbox'])),
                    ])
                    ->defaultItems(1)
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_public')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
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

                Tables\Actions\Action::make('Export Excel')
                    ->url(fn ($record) => route('form-submissions.export', $record->form_id))
                    ->openUrlInNewTab(),


                // Custom Copy URL Action
                Tables\Actions\Action::make('copy_url')
                    ->label('Copy URL')
                    ->url(fn($record) => url('/form/' . $record->slug))
                    ->openUrlInNewTab(true),

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
            'index' => Pages\ListForms::route('/'),
            'create' => Pages\CreateForms::route('/create'),
            'edit' => Pages\EditForms::route('/{record}/edit'),
        ];
    }
}
