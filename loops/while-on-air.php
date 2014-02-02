<?php
/*
 * Bu uygulamada sayfaya 0-20 arası rastgele div html blokları yazdırılacaktır.
 * Kutucukların arkaplan renkleri rastgele belirlenecektir
 * Kutucukların genişlik ve yükseklik değerleri 30px olacaktır.
 * Kutucuklar ardarda sıralanması için float css özellikleri verilecektir.
 */

//sayfaya her girildiğinde oluşturulacak olan kutucuk sayısını tutacak
$rastgeleKutucukSayisi = rand(1, 20);

//oluşturulacak olan her bir kutucuğun ortak olarak sahip olacağı css özelliklerini saklayacak
$stilSabit = 'width: 30px; height: 30px; float:left; ';

//her döngüde yeniden oluşturulacak olan kutsu css özelliklerini saklayacak
$stil = null;
//kutu oluşturma işleminin kaç kez gerçekleştirildiği saklayacak olan sayaç değişkeni
$sayac=0;

//sayac değişkeni rastgele oluşturulacak olan kutucuk sayısına eşit olana kadar kutucuk oluşturma
//ve sayfaya yazdırma işlemi gerçekleştirilecek
while ( $sayac < $rastgeleKutucukSayisi ){
    
    $rastgeleRenk1 = rand(0, 255);
    $rastgeleRenk2 = rand(0, 255);
    $rastgeleRenk3 = rand(0, 255);
    $stil = $stilSabit . "background-color: rgb( $rastgeleRenk1, $rastgeleRenk2, $rastgeleRenk3 );";
    echo "<div style='$stil'>Kutu</div>";
    
    $sayac++;
}