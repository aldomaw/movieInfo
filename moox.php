<?php
header('Content-type: application/x-mpegURL');
$canal = $_GET['canal'];
$calidad = $_GET['calidad'];
$url = 'https://mfwkweb-api.clarovideo.net/services/player/getmedia?api_version=v5.92&authpn=html5player&authpt=ad5565dfgsftr&format=json&region=mexico&device_id=0fe7a10f053530e28b6fc0801de65f96&device_category=web&device_model=html5&device_type=html5&device_so=Chrome&device_manufacturer=windows&HKS=(vs751rlntk9md0as67gee1am14)&stream_type=Hls_kr&preview=0&css=0&device_name=Chrome&user_id=6829354&group_id=' .$canal;
$ch = file_get_contents($url);
$data = json_decode($ch);
$stream = $data->response->media->video_url;
header('Location:' .$stream);
?>