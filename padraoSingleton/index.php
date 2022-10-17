<?php

require_once 'class/Preferences.php';
$pref1 = Preferences::getInstance();
$pref2 = Preferences::getInstance();

echo '<pre>';
var_dump($pref1);
var_dump($pref2);
echo '</pre>';