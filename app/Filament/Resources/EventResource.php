<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Forms\Components\FileUpload;
use App\Filament\Resources\EventResource\Pages;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([

                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->required(),

                        Forms\Components\Grid::make(2)
                            ->schema([

                                Forms\Components\TextInput::make('name')
                                    ->label('Nama Event')
                                    ->placeholder('Nama Event')
                                    ->required(),

                                Forms\Components\TextInput::make('location')
                                    ->label('Tempat')
                                    ->placeholder('Tempat')
                                    ->required(),

                                Forms\Components\DatePicker::make('date')
                                    ->label('Tanggal')
                                    ->placeholder('Tanggal')
                                    ->required(),
                            ]),

                        Forms\Components\TextInput::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Deskripsi')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Event')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal Event')
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
