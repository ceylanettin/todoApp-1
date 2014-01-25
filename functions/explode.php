<?php
//string ifadeyi diziye dönüştürür

$cumle = 'Yıldız Teknik Üniversitesi SEM Eğitim Grubu';

$dizi = explode(' ',$cumle);

//echo implode('<br>', $dizi);

echo 'Bu cümlede toplam ' . count($dizi) . ' sözcük vardır';

echo '<br> İlk sözcük: ';
echo $dizi[0];