<?php
/**
 * Bu sınıf uygulamada email gönderim işlemlerini gerçekleştirir.
 *
 * @author Hasan Tokatlı
 */
class EmailHandler {
    public $ad, $soyad, $email, $konu, $mesaj;
    public $hatalar = array();
    public $protokol = 'SMTP';
    
    public function __construct($ad, $soyad, $email, $konu, $mesaj) {
        $this->ad = $ad;
        $this->soyad = $soyad;
        $this->email = $email;
        $this->konu = $konu;
        $this->mesaj = $mesaj;
    }

    public function mailGonder(){
        //kontroller
        if( empty($this->ad) ){
            $this->hatalar[] = 'Ad boş bırakılamaz.';
        }
        
        if( empty($this->soyad) ){
            $this->hatalar[] = 'Soyad boş bırakılamaz.';
        }
        
        if( empty($this->email) ){
            $this->hatalar[] = 'Email boş bırakılamaz.';
        }
        
        if( empty($this->mesaj) ){
            $this->hatalar[] = 'Mesaj boş bırakılamaz.';
        }
        
        //hatalar dizi değişkeni eleman sayısı 0dan büyükse geriye false dönmeli. 
        //bu hata oluştuğu anlamına gelir
        if( count($this->hatalar) > 0 ){
            return false;
        }else{
            return true;
        }
        
    }
    
}
