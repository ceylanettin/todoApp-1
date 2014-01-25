<?php
$foo = '2SO4';

$ad = 'Hasan $foo'; //içinde özel ifade kullanılamaz

$ad2 = "Hasan <span onclick='alert(\"Selam\");'>$foo</span>";


echo $ad;  //Hasan $foo

echo "<br>\n";

echo $ad2; //Hasan 2SO4


echo "<br>\n----------------------------------------<br>\n";

echo "\n\n\n\n Test";


echo "<br>\n----------------------------------------<br>\n";

$ogrenciAd = 'Alper';
$ogrenciSoyad = 'Aydın';

//birleştirme operatorü noktadır
echo $ogrenciAd . ' ' . $ogrenciSoyad . '<br>';
