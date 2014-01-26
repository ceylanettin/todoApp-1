<?php
$sonuc = 6*5*100/600 == 5; //5 = 5 oalcağı için true

var_dump($sonuc);

echo '<br>';

$a = 5;
$b = 10/2;

$sonuc2 = $a != $b; // anın değeri 5, bnin değeri 5 dolayısıyla a b ye eşittir. ama burda eşit değil midir sorusu soruluyor. o yüzden hayr çıkıyor. her işte bir hayır vardır.
//veya $a <> $b; şeklinde yazılabilir
var_dump($sonuc2);

echo '<br>';

$not1 = rand(0, 100);
$sonuc3 = $not1 >= 80;//eğer not 80e eşitse veya 80den büyükse sonuc3 true olacaktır
$sonuc4 = $not1 <= 44;//eğer not 44 eşitse veya 44den büyküçükse sonuc3 true olacaktır
var_dump($sonuc4);

echo '<br>';

$sayi4 = 0;
$sayi5 = null;

$sonuc5 = $sayi4 == $sayi5;
var_dump($sonuc5);

echo '<br>';

$sayi4 = 5;
$sayi5 = 2+3;

$sonuc5 = $sayi4 === $sayi5;
var_dump($sonuc5);