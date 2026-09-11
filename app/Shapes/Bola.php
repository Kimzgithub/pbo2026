<?php
class Bola {
    const PHI = 3.14;
    public float $jarijari;

    public function __construct(float $jarijari) {
        $this->jarijari = $jarijari;
    }

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jarijari,3);
    }
}