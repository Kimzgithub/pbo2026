<?php

namespace App\Akademik;

use App\Akademik\Dosen;

class Dekan extends Dosen
{
    public function mengesahkanSuratIjinMagang(): string
    {
        return "Magang anda telah disetujui";
    }
}