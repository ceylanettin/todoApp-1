<?php
$musteri1 = array(
    'ad'=>'Hasan',
    'soyad'=>'Tokatlı',
    'email'=>'cehasan@gmail.com',
    'adres'=>array(
        'ev'=>'Eyüp',
        'fatura'=>'Beşiktaş'
    ),
    'banka'=>array(
        array(
            'bankaadi'=>'Garanti Bank',
            'subekod'=>6523,
            'hesapno'=>61546546,
            'ekbilgi'=>'maas hesabı'
        ),
        array(
            'bankaadi'=>'İş Bankası',
            'subekod'=>9854,
            'hesapno'=>332315,
            'ekbilgi'=>'kişisel hesabı'
        )        
    )
);

//diziyi objeye çevirir
$oMusteri = (object)$musteri1;

//müşreti adı yazdırılır
echo $oMusteri->ad . '<br>';


//müşteri fatura adresini yazdırma
echo $oMusteri->adres['fatura'];
