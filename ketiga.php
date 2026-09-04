<?php

$lingkarz = new Lingkar(7);
$lingkarz ->jarijari;
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

echo "luas lingkaran : ". $lingkarz->luas(). "cm2\n";
echo "keliling lingkaran : ". $lingkarz->keliling(). "cm2\n";


$nasirempah =  new Setlingkaran(4);
$nasirempah -> jarijari;
class Setlingkaran {
    const PHI = 3.14;
    public float $jarijari;

    public function __construct(float $jarijari) {
        $this->jarijari = $jarijari;
    }
    public function luas() : float {
        return (1/2)*self::PHI*$this->jarijari*$this->jarijari;
    }
    
    public function keliling() : float {
        return self::PHI*$this->jarijari;
    }
}

echo "luas Nasi Rempah dengan setengah lingkaran : ". $nasirempah->luas(). "cm2\n";
echo "keliling Nasi Rempah dengan setengah lingkaran : ". $nasirempah->keliling(). "cm\n";

$bola = new Bola(10);
$bola->jarijari;
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

echo "Volume Bola : ". $bola->volume() ."cm3\n";

$tabung = new Tabung(7, 10);
$tabung->jarijari;
$tabung->tinggi;
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

$kerucut = new Kerucut(7, 10);
$kerucut->jarijari;
$kerucut->tinggi;
class Kerucut{
    const PHI = 3.14;
    public float $jarijari;
    public float $tinggi;

    public function __construct(float $jarijari, float $tinggi) {
        $this->jarijari = $jarijari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jarijari,2)*$this->tinggi;
    }
}

echo"Volume kerucut : ". $kerucut->volume() . "cm3\n";
