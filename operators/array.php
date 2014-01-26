<?php
$meyveler1 = array('elma','armut');
$meyveler2 = array('nar','karpuz');
$butunMeyveler2 = array_merge($meyveler1, $meyveler2);
print_r($butunMeyveler2);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$meyveler1 = array(0=>'elma',1=>'armut');
$meyveler2 = array(2=>'nar',3=>'karpuz');

$butunMeyveler = $meyveler1+$meyveler2;

print_r($butunMeyveler);


