<?php
/**
 * The size of an integer is platform-dependent, 
 * although a maximum value of about two billion is 
 * the usual value (that's 32 bits signed). 
 * 64-bit platforms usually have a maximum 
 * value of about 9E18. PHP does not support 
 * unsigned integers. Integer size can be determined 
 * using the constant PHP_INT_SIZE, and maximum value 
 * using the constant PHP_INT_MAX since PHP 4.4.0 and PHP 5.0.5.
 * 
 * @link http://www.php.net/manual/en/language.types.integer.php integer php manual
 */

$sayi = '12.5';

echo (int)$sayi;

