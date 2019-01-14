<?php
$access_token = 'M9XHo1P8RDkn/q4Yvj0xPDlpuPgRYgREWgPclCgU8cU2LF1ha9ARcG/NBuTFGQiD1gaWaXGMDA2JLjE3fOxbyaNMRdGIXasUri+C5e2guaLHFgS/lqp8EIKNkWQrxq7Ch7obQpbhGQmrQpZhPVuvpgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
