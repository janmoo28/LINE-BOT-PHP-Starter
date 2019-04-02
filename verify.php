<?php
$access_token = 'xkxBiTvXTU7e9dB69ayL+XjLPleibdeWH5QEEaKdx7hYceCQIzk1UaPneuqkY+isiXLLj23iGWxJLuc3VYlIHL5FBg5F3C2XfWRVq+PF3p5Bfu7FcLz9cTJCFaQJtjjO6T+Zi33i/sY79VG8gRqRpgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
