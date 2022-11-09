<?php
require __DIR__ . '/luaslingkaran.php';
require __DIR__ . '/volumebola.php';

use luasLingkaran\luasLingkaran;
use volumebola\volumeSetengahBola;
use volumebola\volumeSatuBola;

$luaslingkaran = new luasLingkaran();
$volumesatubola = new volumeSatuBola();
$volumesetengahbola = new volumeSetengahBola();


$hasilluaslingkaranvalid = $luaslingkaran->hitungluas(5);
$hasilluaslingkarantidakvalid = $luaslingkaran->hitungluas('wqeqweqe');
echo $hasilluaslingkaranvalid;
//output
//Hasil Luas Lingkaran Untuk Jari-jari 5 Adalah 78.5
echo '<br>';
echo $hasilluaslingkarantidakvalid;
//output
//Input Anda Tidak Valid
echo '<br><br>';
$hasilvolumesatubolavalid = $volumesatubola->hitungVolumeSatuBola(20);
echo $hasilvolumesatubolavalid;
//output
//Hasil Hitung Volume Satu Bola dengan jari-jari 20 Adalah 33493.33333325
echo '<br>';
$hasilvolumesatubolatidakvalid = $volumesatubola->hitungVolumeSatuBola('sadasd');
echo $hasilvolumesatubolatidakvalid;
//output 
//Input Anda TIdak Valid
echo '<br><br>';
$hasilvolumesetengahbolavalid = $volumesetengahbola->hitungVolumeSetengahBola(20);
echo $hasilvolumesetengahbolavalid;
//ouput
//Hasil Hitung Volume Setengah Bola dengan jari-jari 20 Adalah 16746.666666499
echo '<br>';
$hasilvolumesetengahbolatidakvalid = $volumesetengahbola->hitungVolumeSetengahBola('jhbjhbjad');
echo $hasilvolumesetengahbolatidakvalid;
