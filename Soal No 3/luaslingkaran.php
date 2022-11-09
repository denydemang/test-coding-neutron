<?php

namespace luaslingkaran;

class luasLingkaran
{
    private $jarijari;
    private $phi = 3.14;
    private $luaslingkaran;

    public function hitungluas($inputjarijari)
    {
        if (!is_numeric($inputjarijari)) {
            $this->luaslingkaran = "Input Anda Tidak Valid";
        } else {
            $this->jarijari = $inputjarijari;
            $hasil = $this->phi * pow($this->jarijari, 2);
            $this->luaslingkaran = 'Hasil Luas Lingkaran Untuk Jari-jari ' . $this->jarijari . ' Adalah ' . $hasil;
        }
        return $this->luaslingkaran;
    }
}
