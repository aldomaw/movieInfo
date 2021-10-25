<?php
header('Content-type: application/x-mpegURL');

$url = "https://hdfauthftv-a.akamaihd.net/esi/TA?format=json&url=https://simulcast.ftven.fr/simulcast/France_2/hls_fr2/index.m3u8";
$ch = file_get_contents($url);
$data = json_decode($ch);
$stream = $data->url;
header('Location:' .$stream);
?>