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
                        Forms\Components\FileUpload::make('gambar')
                            ->label('Gambar Event')
                            ->image()
                            ->required(),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('nama_event')
                                    ->label('Nama Event')
                                    ->placeholder('Nama Event')
                                    ->required(),

                                Forms\Components\TextInput::make('tempat_event')
                                    ->label('Tempat Event')
                                    ->placeholder('Tempat Event')
                                    ->required(),
                            ]),

                        Forms\Components\DatePicker::make('tgl_event')
                            ->label('Tanggal Event')
                            ->placeholder('Pilih Tanggal Event')
                            ->required(),

                        Forms\Components\TimePicker::make('waktu_event')  // Menggunakan TimePicker untuk waktu
                            ->label('Waktu Event')
                            ->required()
                            ->format('H:i')
                            ->placeholder('Pilih Waktu Event')
                            ->minuteIncrement(5),

                        Forms\Components\TextArea::make('keterangan')
                            ->label('Keterangan')
                            ->placeholder('Deskripsi atau Keterangan Event')
                            ->required(),

                        Forms\Components\Select::make('status')
                            ->label('Status Event')
                            ->options([
                                true => 'Aktif',
                                false => 'Tidak Aktif',
                            ])
                            ->required()
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->circular(),

                Tables\Columns\TextColumn::make('nama_event')
                    ->label('Nama Event')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tempat_event')
                    ->label('Tempat Event')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tgl_event')
                    ->label('Tanggal Event')
                    ->sortable()
                    ->dateTime('d M Y'),

                Tables\Columns\TextColumn::make('waktu_event')
                    ->label('Waktu Event')
                    ->sortable()
                    ->formatStateUsing(fn($state) => \Carbon\Carbon::parse($state)->format('H:i')),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn($state) => $state ? 'Aktif' : 'Tidak Aktif'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status Event')
                    ->options([
                        true => 'Aktif',
                        false => 'Tidak Aktif',
                    ]),
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
