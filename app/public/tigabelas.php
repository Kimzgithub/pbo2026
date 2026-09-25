<?php

require '../../vendor/autoload.php';

use App\Akademik\TenagaKependidikan;

$staf = new TenagaKependidikan(201, "Nerf", "089275324289", "Tanjung Raya 2", 5000000);

$staf->cekIn();
$staf->cuti();

echo "Gaji Pokok: Rp " . number_format($staf->getGajiPokok(), 0, ',', '.');