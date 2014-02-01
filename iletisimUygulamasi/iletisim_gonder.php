<?php
include_once 'lib/EmailHandler.php';

//formdan gelen veriler değişkenlere aktarılıyor
$ad = isset( $_POST['txtAd'] ) ? $_POST['txtAd'] : null;
$soyad = isset( $_POST['txtSoyad'] ) ? $_POST['txtSoyad'] : null;
$email = isset( $_POST['txtEmail'] ) ? $_POST['txtEmail'] : null;
$konu = isset( $_POST['txtKonu'] ) ? $_POST['txtKonu'] : null;
$mesaj = isset( $_POST['txtMesaj'] ) ? $_POST['txtMesaj'] : null;

//emailhandler classından yeni bir obje oluşturuluyor
$EmailHandler1 = new EmailHandler($ad, $soyad, $email, $konu, $mesaj);

//sonuc değişkenine mail gonder metodu çalıştırılıyor ve dönen değer aktarılıyor
$sonuc = $EmailHandler1->mailGonder();

//sonuc değişkenine gelen değere bakılarak başarı durumu sorgulanıyor ona göre mesaj yazılıyor
if( $sonuc == true ){
    echo 'Mesajınız gönderilmiştir. Teşekkür ederiz.';
}else{
    echo 'Mesaj gönderiminde bir hata oluştu.';
    echo '<br>';
    
    echo 'Aşağıdaki hata(lar) oluştu: <br>';
    foreach ( $EmailHandler1->hatalar as $hata ){
        echo  '<span style="color:red;">' . $hata . '</span>  <br>';
    }
}