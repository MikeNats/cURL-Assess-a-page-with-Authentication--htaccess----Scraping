<?php

$username = 'mike';
$password = 'tsou';

$ch = curl_init("../lock/locked.php");
curl_setopt( $ch, CURLOPT_ENCODING, "UTF-8" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $contents = curl_exec ($ch);
curl_close($ch);

echo( $contents);


?>
