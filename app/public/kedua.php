<?php

function luasLingkaran(float $jari): float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran(float $jari): float {
    return 2 * 3.14 * $jari;
}

function volumeBola(float $jari): float {
    return (4 / 3) * 3.14 * $jari * $jari * $jari;
}

function volumeTabung(float $jari,float $tinggi): float {
    return 3.14 * $jari * $jari * $tinggi;
}

function volumeKerucut(float $jari,float $tinggi): float {
    return (1 / 3) * 3.14 * $jari * $jari * $tinggi;
}

$r = 25;
$t = 10;

$luas_tanah = luasLingkaran($r);
echo "Luas tanah budi adalah {$luas_tanah}\n";
echo "Keliling lingkaran : " . kelilingLingkaran($r) . "\n";
echo "Volume bola : " . volumeBola($r) . "\n";
echo "Volume tabung : " . volumeTabung($r, $t) . "\n";
echo "Volume kerucut : " . volumeKerucut($r, $t) . "\n";