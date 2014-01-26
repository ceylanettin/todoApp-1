<?php

echo 5 + 6;

$siparisAdet1 = 56;

$siparisAdet2 = 67;

$birimFiyat = 25.50;

$kdv = 18;

echo '<br>';

$toplamSiparisAdet =  $siparisAdet1 + $siparisAdet2;

$toplamKDVHaricTutar = $toplamSiparisAdet * $birimFiyat;

$toplamKDVDahilTutar = $toplamKDVHaricTutar + ($toplamKDVHaricTutar / 100 * $kdv);

echo 'Toplam borcunuc: ' . number_format( $toplamKDVDahilTutar, 2, ',', '.');

echo '<br>';

$a = rand( 0, 100 );

