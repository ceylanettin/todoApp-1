<?php
$departman = isset( $_POST['dropdownDepartman'] ) ? $_POST['dropdownDepartman']: null;

if ( !is_null($departman) ){
    switch ($departman) {
        case 1:
            echo 'emailiniz pazarlama@sirket.com adresine gönderildi';
        break;

        case 2:
            echo 'emailiniz satis@sirket.com adresine gönderildi';
        break;

        case 3:
            echo 'emailiniz insankaynaklari@sirket.com adresine gönderildi';
        break;  
    
        default:
            echo 'Seçtiğiniz departman yok.';
        break;
    }
}