<?php

class Lingkar {
    const PHI = 3.14;

    public function luas($jarijari) : float {
        return self::PHI*$jarijari*$jarijari;
    }

    public function keliling($jarijari) : float {
        return 2*self::PHI*$jarijari;
    }
}

$nasirempah =  new Setlingkaran();
$jarijari = 4;
$tinggi = 10;
class Setlingkaran {
    const PHI = 3.14;

    public function luas($jarijari) : float {
        return (1/2)*self::PHI*$jarijari*$jarijari;
    }

    public function keliling($jarijari) : float {
        return self::PHI*$jarijari;
    }
}

echo "luas Nasi Rempah dengan setengah lingkaran : ". $nasirempah->luas($jarijari). "cm2\n";
echo "keliling Nasi Rempah dengan setengah lingkaran : ". $nasirempah->keliling($jarijari). "cm\n";

class Bola {
    const PHI = 3.14;
    public function volume($jarijari) : float {
        return (4/3)*self::PHI*pow($jarijari,3);
    }
}

class Tabung {
    const PHI = 3.14;
    public function volume($jarijari,$tinggi) : float {
        return self::PHI*pow($jarijari,2)*$tinggi;
    }
}

class Kerucut{
    const PHI = 3.14;
    public function volume($jarijari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jarijari,2)*$tinggi;
    }
}
