<?php
date_default_timezone_set('America/Santiago');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$time = date('Y-m-d\TH:i:s\Z');
$url = 'https://intcomex-test.apigee.net/v1/getcatalog?locale=es';
//$url = 'https://intcomex-test.apigee.net/v1/getproduct?sku=AC004HUA65';
//$url = 'https://intcomex-test.apigee.net/v1/downloadextendedcatalog';
$apikey = '785cdb69-3197-4870-b028-f4ade6ca501f';
$accesKey = 'ab672112-d70a-4248-98ab-c5d16dea8c60';
$signature = hash('sha256',$apikey.','.$accesKey.','.date('Y-m-d\TH:i:s\Z'));

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: Bearer apiKey=".$apikey."&utcTimeStamp=".$time."&signature=".$signature,
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//echo '<pre>'.($resp).'</pre>';
print_r($resp);
