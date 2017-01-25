<?php
$proxy = 'http://fixie:aoYfea5deitDq95@velodrome.usefixie.com:80';
$proxyauth = 'tawatchaitai2@gmail.com:055591318a';
$access_token = 'v7LZqXk7co8gY7hd7AleEmWM3+1kD4vmypOxPzWbUvrwDcxUI5hDqFot6sUpoceXYp4yChvYdsixNo24lT2SmXux9K+cctLY7BhQIfsaxoNfVK8BFhhSn29WaATUTwSf+EbEdiJ7fqEzS9kXITLBswdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
