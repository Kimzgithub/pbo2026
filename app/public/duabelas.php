<?php
require_once '../../vendor/autoload.php';
use App\Akademik\Dosen;

$dosen1 = new Dosen(101, "Budi Hartono", "08123456789", "Jl. Cendrawasih No. 10", "198012345");

echo "Nama Dosen :" . $dosen1->nama . "<br>";
echo "NIDN :" . $dosen1->getNidn() . "<br>";