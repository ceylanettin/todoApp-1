<?php
header('Content-Type: text/html; charset=utf-8;');

//. opareatörü metinleri birleştirir

$ad = 'Orhan';
$soyad = $ad . ' Gencebay';



$html = '<table style="border:1px solid #ccc;">';

    $html .= '<tr>';
        $html .= '<td>';

            $html .= 'Ad';

        $html .= '</td>';
    $html .= '</tr>';
    
    $html .= '<tr>';
        $html .= '<td>';

            $html .= 'Müslüm';

        $html .= '</td>';
    $html .= '</tr>';    

$html .= '</table>';

echo $html;

