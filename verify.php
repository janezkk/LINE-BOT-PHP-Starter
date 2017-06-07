<?php
$access_token = 'sgHZOo4379t9s5WSgkFv+mYMhkrP1+6tyuuxr1TX6ybPiGLaMdGgQeEgJkl7GPehTqOW5FVgRba2MQmrNses4bR0Bk0DqzGMLadYC3kjg90CLDMPtkd4KYjL0QF74AHg0/bYw42omtBck4CHAL1zNAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
