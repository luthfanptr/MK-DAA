<?php

namespace App\Filament\Admin\Resources\DetailPembayaranResource\Pages;

use App\Filament\Admin\Resources\DetailPembayaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailPembayaran extends EditRecord
{
    protected static string $resource = DetailPembayaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
