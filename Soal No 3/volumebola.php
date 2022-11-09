<?php

namespace volumebola;

class volumeBola
{
    protected $jarijari;
    protected $volumeBola;
    protected $phi = 3.14;
};
class volumeSatuBola extends volumeBola
{
    private $nilaitetap = 1.33333333333;
    public function hitungVolumeSatuBola($jarijari)
    {
        if (!is_numeric($jarijari)) {

            $this->volumeBola = 'Input Anda Tidak Valid';
        } else {

            $this->jarijari = $jarijari;
            $hasil = ($this->nilaitetap) * $this->phi * pow($this->jarijari, 3);
            $this->volumeBola = 'Hasil Hitung Volume Satu Bola dengan jari-jari ' . $jarijari . ' Adalah ' . $hasil;
        }
        return $this->volumeBola;
    }
}
class volumeSetengahBola extends volumeBola
{
    private $nilaitetap = 0.66666666666;

    public function hitungVolumeSetengahBola($jarijari)
    {
        if (!is_numeric($jarijari)) {

            $this->volumeBola = 'Input Anda Tidak Valid';
        } else {
            $this->jarijari = $jarijari;
            $hasil = ($this->nilaitetap) * $this->phi * pow($this->jarijari, 3);
            $this->volumeBola = 'Hasil Hitung Volume Setengah Bola dengan jari-jari ' . $jarijari . ' Adalah ' . $hasil;
        }
        return $this->volumeBola;
    }
}
