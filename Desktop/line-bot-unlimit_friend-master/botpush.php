<?php



require "vendor/autoload.php";

$access_token = 'M9XHo1P8RDkn/q4Yvj0xPDlpuPgRYgREWgPclCgU8cU2LF1ha9ARcG/NBuTFGQiD1gaWaXGMDA2JLjE3fOxbyaNMRdGIXasUri+C5e2guaLHFgS/lqp8EIKNkWQrxq7Ch7obQpbhGQmrQpZhPVuvpgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '81220e7d0f2a41aa350708091ad270b9';
// ID ที่ต้องการส่งไปหา
$pushID = '*ReceiverID*';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







