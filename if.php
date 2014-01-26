<?php
$tutar = rand(10,100);
$kargoBedeliStandart = 7;
$kargoBedeliVip = 2;
$vipMusteri = rand(0, 1);
$toplamTutar = null;


if( $tutar >= 100 ){
   $toplamTutar = $tutar;
}elseif( $vipMusteri == 1 ){
    $toplamTutar = $tutar + $kargoBedeliVip;
}else{
    $toplamTutar = $tutar + $kargoBedeliStandart;
}

echo 'Toplam tutarınız: ' . $toplamTutar;