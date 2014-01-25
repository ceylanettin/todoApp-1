<?php
//diziyi birleştirerek bir string döndürür

$meyveler = array('elma','portakal','nar');

$cumle = implode(',', $meyveler);

echo 'Hasan Beyin sevdiği meyveler: ' . $cumle;