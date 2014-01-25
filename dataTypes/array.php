<?php
$ad = 'Hasan';

$notlar = array(
    35,
    70,
    40
);


//var_dump değişkenin veri tipini ve değerlerini yazdırır
//var_dump( $notlar );

//1. indexteki veriyi yazdırır
echo $notlar[1];

echo '<br>';

//count fonksiyonu verilen dizinin eleman sayısını döndürür
echo count($notlar);
echo '<br>';

$notlar[6] = 68;
var_dump($notlar);

echo '<br>';

$notlar[] = 64;
var_dump($notlar);


echo '<br>';

$notlar['kanaat'] = 80;
var_dump($notlar);


echo '<br>';

$notlar[] = 99;
var_dump($notlar);