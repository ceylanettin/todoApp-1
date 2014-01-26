<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * kurallar:
 * devamsızlık 90 saat üzerinden yüzde 70ten fazlaysa sertifika alamaz
 * not 70ten az olursa sertifika alamaz
 * devam 90 saat üzerinden yüzde 70i geçerse ve not 70i geçerse sertifika alır
 * devam 90 saat üzerinden yüzde 70i geçerse ve not 70i geçemezse katılım belgesi alır
 */

//flag (bayrak değişkeni oluştur)
$belgeDurum = false;

$ogrenci1 = array(
    'ad'=>'Ferdi',
    'soyad'=>'Tayfur',
    'not'=>rand(0,100),
    'katilim'=>rand(0,90)
);

$objOgrenci1 = (object)$ogrenci1;

echo 'Öğrencinin adı-soyadı:  ' . $objOgrenci1->ad . ' ' . $objOgrenci1->soyad;
echo '<br>';
echo 'Öğrencinin katılımı: ' . $objOgrenci1->katilim . ' / 90';
echo '<br>';
echo 'Öğrencinin notu: ' . $objOgrenci1->not . ' / 100';
echo '<br>';

if( $objOgrenci1->katilim * 100 / 90 >= 70 ){//devamsızlık yüzde 70'ten büyük veya eşit ise
    echo 'Öğrenci belge almaya <span style="color:green;">hak kazandı</span>..';
    echo '<br>';
    $belgeDurum = true;
}else{
    echo 'Öğrenci belge almaya <span style="color:red;">hak kazanamadı</span>..';
    echo '<br>';
    $belgeDurum = false;
}

if( ($belgeDurum == true) && ($objOgrenci1->not >= 70) ){//belge almaya hak kazandıysa ve notu 70e eşit veya büyükse
    echo 'Öğrenci <span style="color:green;">sertifika</span> almaya hak kazandı..';
    echo '<br>';    
}

if( ($belgeDurum == true) && ($objOgrenci1->not < 70) ){
    echo 'Öğrenci <span style="color:green;">katılım belgesi</span> almaya hak kazandı..';
    echo '<br>';      
}

if( ($objOgrenci1->not <= 44) ){
    echo 'Başarı durumu: Kaldı';
    echo '<br>';    
}


//**********************************************************
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//alışveriş sitesi örneği
//kar miktarı 25000tlden büyükse veya ciro 100000den büyükse başarılı bir ay

$kar = rand(1000, 40000);
$ciro = rand(50000, 200000 );

if( $kar >= 25000 || $ciro >= 100000 ){
    echo 'Bu ay başarılı';
    echo '<br>';
}  else {
    echo 'Bu ay başarısız';
    echo '<br>';
}

//**********************************************************
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
$x = 5;
$y = 2+3;

if( !empty($x) ){
    echo 'x boş değildir';//boştan kasıt null değildir veya boş metin atanmamıştır, ya da daha önce bu değişkene hiç değer ataması yapılmamıştır
}