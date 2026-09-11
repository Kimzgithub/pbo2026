<?php
date_default_timezone_set("Asia/Jakarta");

$nama = readline('Masukkan nama Anda: ');
$jam = (int)date('H');
$waktu = date('H:i');

if ($jam > 19) {
    $sapaan = "Selamat Malam";
} elseif ($jam > 15) {
    $sapaan = "Selamat Sore";
} elseif ($jam > 11) {
    $sapaan = "Selamat Siang";
} elseif ($jam > 5) {
    $sapaan = "Selamat Pagi";
} else {
    $sapaan = "Selamat Malam";
}

echo "{$sapaan}, {$nama}, sekarang pukul {$waktu}";