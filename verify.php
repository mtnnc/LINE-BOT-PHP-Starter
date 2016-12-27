<?php
$access_token = 'sAwSXsxoAMOBwS06pQ8lozmcMWP26mNtejyRg9cq89UCvgv7JsAlIax+4N0EWCieqeRXqPqI7grtsztRbjALmO9zu1MIoRqDWZfl9b153KtinjxbkETB3AI5RIe1MfEcJ3MJUNlBQkMZM3y8K/NjEgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
