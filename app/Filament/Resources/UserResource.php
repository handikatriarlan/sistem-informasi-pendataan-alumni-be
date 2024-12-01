<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\User;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function getNavigationLabel(): string
    {
        return 'Alumni';
    }

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->label('Email')
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->label('Password')
                    ->minLength(8)
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn($state) => $state ? Hash::make($state) : null)
                    ->dehydrated(fn($state) => filled($state)), // Hanya kirim ke server jika diisi
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->nullable(),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->nullable(),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->nullable(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->label('Jenis Kelamin')
                    ->nullable(),
                Forms\Components\TextInput::make('nis')
                    ->label('NIS')
                    ->nullable(),
                Forms\Components\TextInput::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->nullable(),
                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->nullable(),
                Forms\Components\TextInput::make('no_phone')
                    ->label('No. Telepon')
                    ->tel()
                    ->nullable(),
                Forms\Components\TextInput::make('pendidikan_lanjut')
                    ->label('Pendidikan Lanjut')
                    ->nullable(),
                Forms\Components\TextInput::make('pekerjaan')
                    ->label('Pekerjaan')
                    ->nullable(),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('role', 'alumni');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('foto')
                    ->label('Foto')
                    ->formatStateUsing(fn($state) => $state ? '✅ Ada' : '❌ Tidak Ada'),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->label('Tempat Lahir'),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('nis')
                    ->label('NIS'),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->sortable()
                    ->searchable()
                    ->label('Tahun Lulus'),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat'),
                Tables\Columns\TextColumn::make('no_phone')
                    ->label('No. Telepon'),
                Tables\Columns\TextColumn::make('pendidikan_lanjut')
                    ->label('Pendidikan Lanjut'),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->label('Pekerjaan'),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->sortable()
                    ->label('Tanggal Diperbarui')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                SelectFilter::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->options(
                        static::getModel()::query()
                            ->distinct()
                            ->pluck('tahun_lulus', 'tahun_lulus')
                            ->filter()
                            ->toArray()
                    ),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
