<?php


require 'apple.php';
require 'samsung.php';


$samsung_phone = new samsung\createphone();
echo "<pre>";
print_r($samsung_phone);
echo "</pre>";
echo"<br>";


$apple_hw = new \apple\hardware\phones\createphone();
echo "<pre>";
print_r($apple_hw);
echo "</pre>";
echo"<br>";

$apple_sw = new \apple\software\phones\createphone();
echo "<pre>";
print_r($apple_sw);
echo "</pre>";
echo"<br>";