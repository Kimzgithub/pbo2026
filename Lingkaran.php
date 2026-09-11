<?php
class Lingkar {
    const PHI = 3.14;
    public float $jarijari;

    public function __construct(float $jarijari) {
        $this->jarijari = $jarijari;
    }

    public function luas() : float {
        return self::PHI*$this->jarijari*$this->jarijari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jarijari;
    }
}