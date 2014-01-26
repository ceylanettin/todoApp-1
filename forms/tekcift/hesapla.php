<?php
header('Content-Type: text/html; charset=utf-8');

$sayi = isset( $_GET['txtSayi'] ) ? $_GET['txtSayi'] : null;

//sayının modu alınıyor eğer sayı girilmişse
if( is_null($sayi) ){//sayi1 boş mu
    echo 'Bir sayı girmediniz.';
}else{
    $mod = $sayi % 2;
    if( $mod == 1 ){//
        echo 'Sayınız tek.';
    }else{
        echo 'Sayınız çift';
    }
}

echo 'çşğüööçç';