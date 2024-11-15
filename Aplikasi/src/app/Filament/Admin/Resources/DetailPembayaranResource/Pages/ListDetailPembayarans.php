<?php

namespace App\Filament\Admin\Resources\DetailPembayaranResource\Pages;

use App\Filament\Admin\Resources\DetailPembayaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailPembayarans extends ListRecords
{
    protected static string $resource = DetailPembayaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
