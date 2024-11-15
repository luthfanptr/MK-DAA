<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MetodePembayaranResource\Pages;
use App\Filament\Admin\Resources\MetodePembayaranResource\RelationManagers;
use App\Models\MetodePembayaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class MetodePembayaranResource extends Resource
{
    protected static ?string $model = MetodePembayaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_metode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('deskripsi_metode')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_metode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_metode')
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
            'index' => Pages\ListMetodePembayarans::route('/'),
            'create' => Pages\CreateMetodePembayaran::route('/create'),
            'edit' => Pages\EditMetodePembayaran::route('/{record}/edit'),
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
        return Auth::user()->hasRole('super_admin') || Auth::user()->hasRole('User');
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->hasRole('super_admin');
    }

}
