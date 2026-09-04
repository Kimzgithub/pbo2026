<?php

$lingkarz = new Lingkar();
$lingkarz ->jarijari = 7;
class Lingkar {
    const PHI = 3.14;
    public float $jarijari;

    public function luas() : float {
        return self::PHI*$this->jarijari*$this->jarijari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jarijari;
    }
}

echo "luas lingkaran : ". $lingkarz->luas(). "cm2\n";
echo "keliling lingkaran : ". $lingkarz->keliling(). "cm2\n";


$nasirempah =  new Setlingkaran();
$nasirempah -> jarijari = 4;
class Setlingkaran {
    const PHI = 3.14;
    public float $jarijari;

    public function luas() : float {
        return (1/2)*self::PHI*$this->jarijari*$this->jarijari;
    }
    
    public function keliling() : float {
        return self::PHI*$this->jarijari;
    }
}

echo "luas Nasi Rempah dengan setengah lingkaran : ". $nasirempah->luas(). "cm2\n";
echo "keliling Nasi Rempah dengan setengah lingkaran : ". $nasirempah->keliling(). "cm\n";

$bola = new Bola();
$bola->jarijari = 10;
class Bola {
    const PHI = 3.14;
    public float $jarijari;

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jarijari,3);
    }
}

echo "Volume Bola : ". $bola->volume() ."cm3\n";

$tabung = new Tabung();
$tabung->jarijari = 7;
$tabung->tinggi = 10;
class Tabung {
    const PHI = 3.14;
    public float $jarijari;
    public float $tinggi;
    public function volume() : float {
        return self::PHI*pow($this->jarijari,2) * $this->tinggi;
    }
}

$kerucut = new Kerucut();
$kerucut->jarijari = 7;
$kerucut->tinggi = 10;
class Kerucut{
    const PHI = 3.14;
    public float $jarijari;
    public float $tinggi;
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jarijari,2)*$this->tinggi;
    }
}

echo"Volume kerucut : ". $kerucut->volume() . "cm3\n";
