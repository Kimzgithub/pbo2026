<?php
class Tabung {
    const PHI = 3.14;
    public float $jarijari;
    public float $tinggi;

    public function __construct(float $jarijari, float $tinggi) {
        $this->jarijari = $jarijari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI*pow($this->jarijari,2) * $this->tinggi;
    }
}