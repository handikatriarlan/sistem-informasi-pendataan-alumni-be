<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniResource\Pages;
use App\Models\Alumni;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->label('Email'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->label('Password'),
                Forms\Components\TextInput::make('nisn')
                    ->required()
                    ->numeric()
                    ->minLength(10)
                    ->maxLength(10)
                    ->label('NISN'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Name'),
                Tables\Columns\TextColumn::make('nisn')
                    ->sortable()
                    ->searchable()
                    ->label('NISN'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Updated At'),
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
            'index' => Pages\ListAlumnis::route('/'),
            'create' => Pages\CreateAlumni::route('/create'),
            'edit' => Pages\EditAlumni::route('/{record}/edit'),
        ];
    }
}
