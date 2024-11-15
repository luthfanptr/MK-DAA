<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PembayaranResource\Pages;
use App\Filament\Admin\Resources\PembayaranResource\RelationManagers;
use App\Models\Pembayaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PembayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_siswa')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_detailpembayaran')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_metodepembayaran')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pembayaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_pembayaran')
                    ->required(),
                Forms\Components\TextInput::make('metod_pembayaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_siswa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_detailpembayaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_metodepembayaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pembayaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pembayaran')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metod_pembayaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
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
            'index' => Pages\ListPembayarans::route('/'),
            'create' => Pages\CreatePembayaran::route('/create'),
            'edit' => Pages\EditPembayaran::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
    {
        return Auth::user()->hasRole('super_admin') || Auth::user()->hasRole('User');
    }

    public static function canView($record): bool
    {
        return Auth::user()->hasRole('super_admin') || Auth::user()->hasRole('User');
    }

    public static function canCreate(): bool
    {
        return Auth::user()->hasRole('User');
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->hasRole('super_admin');
    }

    public static function canDelete($record): bool
    {
        return false; // Tidak ada yang bisa menghapus pembayaran
    }

}
