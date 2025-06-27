<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormSubmissionResource\Pages;
use App\Filament\Resources\FormSubmissionResource\RelationManagers;
use App\Models\FormSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormSubmissionResource extends Resource
{
    protected static ?string $model = FormSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('form.title')->label('Form')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Waktu Submit')->since(),
                Tables\Columns\TextColumn::make('data')
                ->label('Isi Form')
                ->formatStateUsing(fn ($state) => json_encode($state, JSON_UNESCAPED_UNICODE))
                ->limit(50),
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
            'index' => Pages\ListFormSubmissions::route('/'),
            //'view' => Pages\ViewFormSubmission::route('/{record}'),
            //'index' => Pages\ListFormSubmissions::route('/'),
            //'create' => Pages\CreateFormSubmission::route('/create'),
            //'edit' => Pages\EditFormSubmission::route('/{record}/edit'),
        ];
    }
}
