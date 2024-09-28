<?php

namespace App\Filament\Resources\PsychologistResource\Pages;

use App\Filament\Resources\PsychologistResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePsychologist extends CreateRecord
{
    protected static string $resource = PsychologistResource::class;

    protected static ?string $navigationLabel = 'Create Lokasi';
}
